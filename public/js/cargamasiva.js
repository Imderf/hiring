!(function (e) {
    var n = {};
    function a(t) {
        if (n[t]) return n[t].exports;
        var o = (n[t] = { i: t, l: !1, exports: {} });
        return e[t].call(o.exports, o, o.exports, a), (o.l = !0), o.exports;
    }
    (a.m = e),
        (a.c = n),
        (a.d = function (e, n, t) {
            a.o(e, n) ||
                Object.defineProperty(e, n, { enumerable: !0, get: t });
        }),
        (a.r = function (e) {
            "undefined" != typeof Symbol &&
                Symbol.toStringTag &&
                Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module",
                }),
                Object.defineProperty(e, "__esModule", { value: !0 });
        }),
        (a.t = function (e, n) {
            if ((1 & n && (e = a(e)), 8 & n)) return e;
            if (4 & n && "object" == typeof e && e && e.__esModule) return e;
            var t = Object.create(null);
            if (
                (a.r(t),
                Object.defineProperty(t, "default", {
                    enumerable: !0,
                    value: e,
                }),
                2 & n && "string" != typeof e)
            )
                for (var o in e)
                    a.d(
                        t,
                        o,
                        function (n) {
                            return e[n];
                        }.bind(null, o)
                    );
            return t;
        }),
        (a.n = function (e) {
            var n =
                e && e.__esModule
                    ? function () {
                          return e.default;
                      }
                    : function () {
                          return e;
                      };
            return a.d(n, "a", n), n;
        }),
        (a.o = function (e, n) {
            return Object.prototype.hasOwnProperty.call(e, n);
        }),
        (a.p = "/"),
        a((a.s = 36));
})({
    36: function (e, n, a) {
        e.exports = a(37);
    },
    37: function (e, n) {
        $(document).ready(function () {
            $(".btn-upload").click(function () {
                $("#form-carga-masiva").find("#file-xml").click();
            }),
                $(".btn-action-upload").click(function () {
                    $(".alert-upload").addClass("d-none"),
                        $("#form-carga-masiva").find("#file-xml").val()
                            ? $("#form-carga-masiva").submit()
                            : $(".alert-upload").removeClass("d-none");
                }),
                $("#file-xml").change((e) => {
                    console.log("hola", e);
                    var file = $("#file-xml").get(0).files[0];
                    console.log(file.name);
                    $(".file-upload").html(file.name);
                }),
                $("#form-carga-masiva")
                    .find("#file-xml")
                    .change(function () {
                        $(".alert-upload").addClass("d-none");
                    }),
                $("#form-carga-masiva").submit(function (e) {
                    e.preventDefault(),
                        (function () {
                            var e = $("#form-carga-masiva").find(
                                    "#file-xml"
                                )[0],
                                n = new FormData();
                            n.append("_token", $('[name="_token"]').val()),
                                n.append("file", e.files[0]),
                                n.append(
                                    "type",
                                    $("#form-carga-masiva").find("#type").val()
                                );
                            var a = new XMLHttpRequest();
                            a.open(
                                "POST",
                                $("#form-carga-masiva").attr("action")
                            ),
                                (a.onload = function () {
                                    !(function (e) {
                                        if (
                                            ($(".loading-icon").addClass(
                                                "d-none"
                                            ),
                                            e.status)
                                        ) {
                                            var n = $("#file-xml").parent();
                                            $("#file-xml").remove(),
                                                n.append(
                                                    '<input type="file" id="file-xml" class="d-none" accept="text/xml" required="">'
                                                ),
                                                $("#form-carga-masiva")
                                                    .find("#file-xml")
                                                    .change(function () {
                                                        $(
                                                            ".alert-upload"
                                                        ).addClass("d-none");
                                                    });
                                            /*alert(
                                                    "Importados los productos con éxito!"
                                                );*/
                                            $(".alert-cargam").html(e.message);
                                            $(".alert-cargam").addClass(
                                                "alert-success"
                                            );
                                            $(".alert-cargam").show();

                                            setTimeout(() => {
                                                $(".alert-cargam").hide();
                                            }, 3000);
                                        } else {
                                            console.log("Error", e.message);
                                            $(".error-excel").html(e.message);
                                            $(".error-excel").show();
                                        }
                                    })($.parseJSON(a.responseText));
                                }),
                                $(".loading-icon").removeClass("d-none"),
                                /*a.onreadystatechange = function (oEvent) {
                                if (a.readyState === 4) {
                                    if (a.status === 200) {
                                        console.log(e.message);
                                    } else {
                                        console.log("Error", e.message);
                                        $(".error-excel").html(e.message);
                                        $(".error-excel").show();
                                    }
                                }
                            };*/
                                a.send(n);
                        })();
                });
        });
    },
});
