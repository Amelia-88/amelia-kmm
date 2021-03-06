import { Pipeline, Step, GeneralSteps } from '@ephox/agar';
import { UnitTest, assert } from '@ephox/bedrock';
import { Arr } from '@ephox/katamari';
import { Insert, Remove, Body, Element, SelectorFind } from '@ephox/sugar';
import AriaVoice from 'ephox/echo/api/AriaVoice';
import { console } from '@ephox/dom-globals';

UnitTest.asynctest('Node Change Test', function (success, failure) {
  // @tunic-tag=aria

  const isPresent = function (selector) {
    return SelectorFind.first(selector).isSome();
  };

  const checkAriaVoice = function (spec) {
    return Step.async(function (next, err) {
      // tslint:disable-next-line:no-console
      console.log(spec.info);
      const p = Element.fromHtml('<p>Bakon eatsum</p>');
      Insert.append(Body.body(), p);
      const cleanup = function () {
        if (p !== null) {
          Remove.remove(p);
        }
      };
      Pipeline.async({}, [
        Step.sync(function () {
          assert.eq(isPresent(spec.selector), false,
              'speech token should not be present in DOM.');
          spec.action(p, spec.speech);
          assert.eq(isPresent(spec.selector), true,
              'speech token should be present in the DOM.');
        }),
        GeneralSteps.waitForPredicate(
          'speech token to be removed from DOM', 400, 2000,
          () => !isPresent(spec.selector))
      ], function () {
        cleanup();
        next();
      }, function () {
        cleanup();
        err.apply(null, arguments);
      });
    });
  };

  const cases = [
    {
      info: 'Checking AriaVoice.shout()',
      speech: 'Invalid bacon, should be crispy.',
      selector: '[role="alert"]',
      action: AriaVoice.shout
    },
    {
      info: 'Checking AriaVoice.speak()',
      speech: 'Invalid bacon, should not be injured.',
      selector: '[aria-label^="Invalid"][aria-live="polite"]',
      action: AriaVoice.speak
    }
  ];

  Pipeline.async({}, Arr.map(cases, checkAriaVoice), function () { success(); }, failure);
});
