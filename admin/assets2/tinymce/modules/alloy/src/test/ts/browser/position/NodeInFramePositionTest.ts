import { Chain, Cursors, Guard, NamedChain } from '@ephox/agar';
import { UnitTest } from '@ephox/bedrock';
import { Option, Result } from '@ephox/katamari';
import { Css, DomEvent, Element, SelectorFind, WindowSelection } from '@ephox/sugar';

import * as GuiFactory from 'ephox/alloy/api/component/GuiFactory';
import { Container } from 'ephox/alloy/api/ui/Container';
import * as ChainUtils from 'ephox/alloy/test/ChainUtils';
import * as GuiSetup from 'ephox/alloy/api/testhelpers/GuiSetup';
import * as PositionTestUtils from 'ephox/alloy/test/PositionTestUtils';
import * as Sinks from 'ephox/alloy/test/Sinks';

import * as Frames from '../../../../demo/ts/ephox/alloy/demo/frames/Frames';
import { Window } from '@ephox/dom-globals';

UnitTest.asynctest('SelectionInFramePositionTest', (success, failure) => {

  const frame = Element.fromTag('iframe');

  GuiSetup.setup((store, doc, body) => {
    let content = '';
    for (let i = 0; i < 20; i++) {
      content += '<p id=p' + i + '>paragraph ' + i + '</p>';
    }

    const onload = DomEvent.bind(frame, 'load', () => {
      onload.unbind();
      Frames.write(frame, '<html><body contenteditable="true">' + content + '</body></html>');
    });

    const classicEditor = GuiFactory.build(
      GuiFactory.external({
        uid: 'classic-editor',
        element: frame
      })
    );

    Css.set(classicEditor.element(), 'margin-top', '300px');

    return GuiFactory.build(
      Container.sketch({
        components: [
          GuiFactory.premade(Sinks.fixedSink()),
          GuiFactory.premade(Sinks.relativeSink()),
          GuiFactory.premade(Sinks.popup()),
          GuiFactory.premade(classicEditor)
        ]
      })
    );

  }, (doc, body, gui, component, store) => {
    const cSetupAnchor = Chain.mapper((data: any) => {
      const node = data.classic.element().dom().contentWindow.document.querySelector('#p3');
      return {
        anchor: 'node',
        root: Element.fromDom(data.classic.element().dom().contentWindow.document.body),
        node: Option.some(Element.fromDom(node))
      };
    });

    const cGetWin = Chain.mapper((frame: any) => {
      return frame.element().dom().contentWindow;
    });

    const cSetPath = (rawPath) => {
      const path = Cursors.path(rawPath);

      return Chain.binder((win: Window) => {
        const body = Element.fromDom(win.document.body);
        const range = Cursors.calculate(body, path);
        WindowSelection.setExact(
          win,
          range.start(),
          range.soffset(),
          range.finish(),
          range.foffset()
        );
        return WindowSelection.getExact(win).fold(() => {
          return Result.error('Could not retrieve the set selection');
        }, Result.value);
      });
    };

    return [
      Chain.asStep({}, [
        NamedChain.asChain([
          ChainUtils.cFindUids(gui, {
            fixed: 'fixed-sink',
            relative: 'relative-sink',
            popup: 'popup',
            classic: 'classic-editor'
          }),
          NamedChain.direct('classic', cGetWin, 'iWin'),

          // Wait until the content has loaded
          ChainUtils.cLogging(
            'Waiting for iframe to load content.',
            [
              Chain.control(
                Chain.binder((data: any) => {
                  const root = Element.fromDom(data.classic.element().dom().contentWindow.document.body);
                  return SelectorFind.descendant(root, 'p').fold(() => {
                    return Result.error('Could not find paragraph yet');
                  }, (p) => {
                    return Result.value(data);
                  });
                }),
                Guard.tryUntil('Waiting for content to load in iframe', 100, 10000)
              )
            ]
          ),

          ChainUtils.cLogging(
            'Selecting 3rd paragraph',
            [
              NamedChain.direct('iWin', cSetPath({
                startPath: [ 2, 0 ],
                soffset: 0,
                finishPath: [ 3, 0 ],
                foffset: 0
              }), 'range'),
              NamedChain.write('anchor', cSetupAnchor)
            ]
          ),

          PositionTestUtils.cTestSinkWithin(
            'Relative, Selected: 3rd paragraph, no page scroll, no editor scroll, positioned within frame',
            'relative',
            frame),

          PositionTestUtils.cTestSinkWithin(
            'Fixed, Selected: 3rd paragraph, no page scroll, no editor scroll, positioned within frame',
            'fixed',
            frame
          ),

          PositionTestUtils.cScrollDown('classic', '2000px'),

          PositionTestUtils.cTestSinkWithin(
            'Relative, Selected: 3rd paragraph, 2000px scroll, no editor scroll, positioned within frame',
            'relative',
            frame
          ),

          PositionTestUtils.cTestSinkWithin(
            'Fixed, Selected: 3rd paragraph, 2000px scroll, no editor scroll, positioned within frame',
            'fixed',
            frame
          )
        ])
      ])
    ];
  }, () => { success(); }, failure);
});
