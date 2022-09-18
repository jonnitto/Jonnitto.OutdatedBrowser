(function () {
    var outdated = document.getElementById("outdated");
    if (outdated) {
        var testArray = outdated.getAttribute("data-lowerthan").split(",");
        var validBrowser = true;
        var hasCookie = false;
        if (navigator.cookieEnabled) {
            hasCookie = (function () {
                var v = document.cookie.match(
                    "(^|;) ?outdatedbrowser=([^;]*)(;|$)"
                );
                return v ? v[2] == "true" : null;
            })();
        }

        function removeElement() {
            outdated.parentElement.removeChild(outdated);
        }

        function hide() {
            removeElement();
            if (navigator.cookieEnabled) {
                document.cookie = "outdatedbrowser=true;path=/;";
            }
            return false;
        }

        function supportsCSSProp(prop) {
            var style = document.createElement("div").style;
            var vendors = ["Moz", "O", "ms", "Webkit", "Khtml"];
            var length = vendors.length;
            if (prop in style) {
                return true;
            }
            prop = prop.replace(/(?:^|-)(\w)/g, function (matches, letter) {
                return letter.toUpperCase();
            });

            while (length--) {
                if (vendors[length] + prop in style) {
                    return true;
                }
            }
            return false;
        }

        if (hasCookie) {
            removeElement();
        } else {
            // check all the props
            for (var index = 0; index < testArray.length; index++) {
                var testString = testArray[index];
                var check = supportsCSSProp("" + testString + "");
                if (!check) {
                    // If the check fails, set validBrowser to false and cancel the loop
                    validBrowser = false;
                    break;
                }
            }

            if (validBrowser) {
                removeElement();
            } else {
                outdated.style.display = "block";
                document.getElementById("btnCloseUpdateBrowser").onmousedown =
                    hide;
            }
        }
    }
})();
