(function () {
    var search = document.querySelector(".search_float");
    if (search) {
        var btnClose = document.querySelector(".btn-search");
        var btnOpen = document.querySelector(".btn-search-open");

        btnClose.onclick = function () {
            btnOpen.style.display = "block";
            btnClose.style.display = "none";
            search.style.display = "block";
        };

        btnOpen.onclick = function () {
            btnClose.style.display = "block";
            btnOpen.style.display = "none";
            search.style.display = "none";
        };

        var parent = document.querySelector(".price-slider");
        if (!parent) return;

        var rangeS = parent.querySelectorAll("input[type=range]"),
            numberS = parent.querySelectorAll("input[type=number]"),
            filtro = parent.querySelector("#valor");

        rangeS.forEach(function (el) {
            el.oninput = function () {
                var slide1 = parseFloat(rangeS[0].value),
                    slide2 = parseFloat(rangeS[1].value);

                if (slide1 > slide2) {
                    [slide1, slide2] = [slide2, slide1];
                }

                numberS[0].value = slide1;
                numberS[1].value = slide2;

                filtro.value = true;
            };
        });

        numberS.forEach(function (el) {
            el.oninput = function () {
                var number1 = parseFloat(numberS[0].value),
                    number2 = parseFloat(numberS[1].value);

                if (number1 > number2) {
                    var tmp = number1;
                    numberS[0].value = number2;
                    numberS[1].value = tmp;
                }

                rangeS[0].value = number1;
                rangeS[1].value = number2;

                filtro.value = true;
            };
        });
    }
})();

function copyToClipboard(text) {
    if (window.clipboardData && window.clipboardData.setData) {
        // IE specific code path to prevent textarea being shown while dialog is visible.
        return clipboardData.setData("Text", text);
    } else if (
        document.queryCommandSupported &&
        document.queryCommandSupported("copy")
    ) {
        var textarea = document.createElement("textarea");
        textarea.textContent = text;
        textarea.style.position = "fixed"; // Prevent scrolling to bottom of page in MS Edge.
        document.body.appendChild(textarea);
        textarea.select();
        try {
            return document.execCommand("copy"); // Security exception may be thrown by some browsers.
        } catch (ex) {
            console.warn("Copy to clipboard failed.", ex);
            return false;
        } finally {
            document.body.removeChild(textarea);
        }
    }
}
