!(function (t) {
    var n = {};
    function e(r) {
        if (n[r]) return n[r].exports;
        var o = (n[r] = { i: r, l: !1, exports: {} });
        return t[r].call(o.exports, o, o.exports, e), (o.l = !0), o.exports;
    }
    (e.m = t),
        (e.c = n),
        (e.d = function (t, n, r) {
            e.o(t, n) ||
                Object.defineProperty(t, n, { enumerable: !0, get: r });
        }),
        (e.r = function (t) {
            "undefined" != typeof Symbol &&
                Symbol.toStringTag &&
                Object.defineProperty(t, Symbol.toStringTag, {
                    value: "Module",
                }),
                Object.defineProperty(t, "__esModule", { value: !0 });
        }),
        (e.t = function (t, n) {
            if ((1 & n && (t = e(t)), 8 & n)) return t;
            if (4 & n && "object" == typeof t && t && t.__esModule) return t;
            var r = Object.create(null);
            if (
                (e.r(r),
                Object.defineProperty(r, "default", {
                    enumerable: !0,
                    value: t,
                }),
                2 & n && "string" != typeof t)
            )
                for (var o in t)
                    e.d(
                        r,
                        o,
                        function (n) {
                            return t[n];
                        }.bind(null, o)
                    );
            return r;
        }),
        (e.n = function (t) {
            var n =
                t && t.__esModule
                    ? function () {
                          return t.default;
                      }
                    : function () {
                          return t;
                      };
            return e.d(n, "a", n), n;
        }),
        (e.o = function (t, n) {
            return Object.prototype.hasOwnProperty.call(t, n);
        }),
        (e.p = ""),
        e((e.s = 108));
})([
    ,
    function (t, n) {
        var e = (t.exports =
            "undefined" != typeof window && window.Math == Math
                ? window
                : "undefined" != typeof self && self.Math == Math
                ? self
                : Function("return this")());
        "number" == typeof __g && (__g = e);
    },
    function (t, n, e) {
        var r = e(4);
        t.exports = function (t) {
            if (!r(t)) throw TypeError(t + " is not an object!");
            return t;
        };
    },
    function (t, n) {
        t.exports = function (t) {
            try {
                return !!t();
            } catch (t) {
                return !0;
            }
        };
    },
    function (t, n) {
        t.exports = function (t) {
            return "object" == typeof t ? null !== t : "function" == typeof t;
        };
    },
    function (t, n, e) {
        var r = e(19)("wks"),
            o = e(18),
            i = e(1).Symbol,
            u = "function" == typeof i;
        (t.exports = function (t) {
            return r[t] || (r[t] = (u && i[t]) || (u ? i : o)("Symbol." + t));
        }).store = r;
    },
    ,
    ,
    function (t, n) {
        var e = {}.toString;
        t.exports = function (t) {
            return e.call(t).slice(8, -1);
        };
    },
    function (t, n) {
        var e = (t.exports = { version: "2.6.12" });
        "number" == typeof __e && (__e = e);
    },
    function (t, n, e) {
        var r = e(26),
            o = e(30);
        t.exports = e(11)
            ? function (t, n, e) {
                  return r.f(t, n, o(1, e));
              }
            : function (t, n, e) {
                  return (t[n] = e), t;
              };
    },
    function (t, n, e) {
        t.exports = !e(3)(function () {
            return (
                7 !=
                Object.defineProperty({}, "a", {
                    get: function () {
                        return 7;
                    },
                }).a
            );
        });
    },
    function (t, n) {
        var e = Math.ceil,
            r = Math.floor;
        t.exports = function (t) {
            return isNaN((t = +t)) ? 0 : (t > 0 ? r : e)(t);
        };
    },
    function (t, n, e) {
        "use strict";
        var r,
            o,
            i = e(37),
            u = RegExp.prototype.exec,
            c = String.prototype.replace,
            l = u,
            a =
                ((r = /a/),
                (o = /b*/g),
                u.call(r, "a"),
                u.call(o, "a"),
                0 !== r.lastIndex || 0 !== o.lastIndex),
            f = void 0 !== /()??/.exec("")[1];
        (a || f) &&
            (l = function (t) {
                var n,
                    e,
                    r,
                    o,
                    l = this;
                return (
                    f &&
                        (e = new RegExp(
                            "^" + l.source + "$(?!\\s)",
                            i.call(l)
                        )),
                    a && (n = l.lastIndex),
                    (r = u.call(l, t)),
                    a &&
                        r &&
                        (l.lastIndex = l.global ? r.index + r[0].length : n),
                    f &&
                        r &&
                        r.length > 1 &&
                        c.call(r[0], e, function () {
                            for (o = 1; o < arguments.length - 2; o++)
                                void 0 === arguments[o] && (r[o] = void 0);
                        }),
                    r
                );
            }),
            (t.exports = l);
    },
    function (t, n, e) {
        var r = e(12),
            o = Math.min;
        t.exports = function (t) {
            return t > 0 ? o(r(t), 9007199254740991) : 0;
        };
    },
    function (t, n) {
        t.exports = function (t) {
            if (null == t) throw TypeError("Can't call method on  " + t);
            return t;
        };
    },
    function (t, n, e) {
        var r = e(1),
            o = e(9),
            i = e(10),
            u = e(17),
            c = e(23),
            l = function (t, n, e) {
                var a,
                    f,
                    s,
                    p,
                    v = t & l.F,
                    d = t & l.G,
                    h = t & l.S,
                    g = t & l.P,
                    x = t & l.B,
                    y = d
                        ? r
                        : h
                        ? r[n] || (r[n] = {})
                        : (r[n] || {}).prototype,
                    m = d ? o : o[n] || (o[n] = {}),
                    b = m.prototype || (m.prototype = {});
                for (a in (d && (e = n), e))
                    (s = ((f = !v && y && void 0 !== y[a]) ? y : e)[a]),
                        (p =
                            x && f
                                ? c(s, r)
                                : g && "function" == typeof s
                                ? c(Function.call, s)
                                : s),
                        y && u(y, a, s, t & l.U),
                        m[a] != s && i(m, a, p),
                        g && b[a] != s && (b[a] = s);
            };
        (r.core = o),
            (l.F = 1),
            (l.G = 2),
            (l.S = 4),
            (l.P = 8),
            (l.B = 16),
            (l.W = 32),
            (l.U = 64),
            (l.R = 128),
            (t.exports = l);
    },
    function (t, n, e) {
        var r = e(1),
            o = e(10),
            i = e(31),
            u = e(18)("src"),
            c = e(32),
            l = "toString",
            a = ("" + c).split(l);
        (e(9).inspectSource = function (t) {
            return c.call(t);
        }),
            (t.exports = function (t, n, e, c) {
                var l = "function" == typeof e;
                l && (i(e, "name") || o(e, "name", n)),
                    t[n] !== e &&
                        (l &&
                            (i(e, u) ||
                                o(e, u, t[n] ? "" + t[n] : a.join(String(n)))),
                        t === r
                            ? (t[n] = e)
                            : c
                            ? t[n]
                                ? (t[n] = e)
                                : o(t, n, e)
                            : (delete t[n], o(t, n, e)));
            })(Function.prototype, l, function () {
                return ("function" == typeof this && this[u]) || c.call(this);
            });
    },
    function (t, n) {
        var e = 0,
            r = Math.random();
        t.exports = function (t) {
            return "Symbol(".concat(
                void 0 === t ? "" : t,
                ")_",
                (++e + r).toString(36)
            );
        };
    },
    function (t, n, e) {
        var r = e(9),
            o = e(1),
            i = "__core-js_shared__",
            u = o[i] || (o[i] = {});
        (t.exports = function (t, n) {
            return u[t] || (u[t] = void 0 !== n ? n : {});
        })("versions", []).push({
            version: r.version,
            mode: e(33) ? "pure" : "global",
            copyright: "© 2020 Denis Pushkarev (zloirock.ru)",
        });
    },
    function (t, n) {
        t.exports = function (t) {
            if ("function" != typeof t)
                throw TypeError(t + " is not a function!");
            return t;
        };
    },
    function (t, n, e) {
        "use strict";
        var r = e(35),
            o = RegExp.prototype.exec;
        t.exports = function (t, n) {
            var e = t.exec;
            if ("function" == typeof e) {
                var i = e.call(t, n);
                if ("object" != typeof i)
                    throw new TypeError(
                        "RegExp exec method returned something other than an Object or null"
                    );
                return i;
            }
            if ("RegExp" !== r(t))
                throw new TypeError(
                    "RegExp#exec called on incompatible receiver"
                );
            return o.call(t, n);
        };
    },
    function (t, n, e) {
        "use strict";
        e(36);
        var r = e(17),
            o = e(10),
            i = e(3),
            u = e(15),
            c = e(5),
            l = e(13),
            a = c("species"),
            f = !i(function () {
                var t = /./;
                return (
                    (t.exec = function () {
                        var t = [];
                        return (t.groups = { a: "7" }), t;
                    }),
                    "7" !== "".replace(t, "$<a>")
                );
            }),
            s = (function () {
                var t = /(?:)/,
                    n = t.exec;
                t.exec = function () {
                    return n.apply(this, arguments);
                };
                var e = "ab".split(t);
                return 2 === e.length && "a" === e[0] && "b" === e[1];
            })();
        t.exports = function (t, n, e) {
            var p = c(t),
                v = !i(function () {
                    var n = {};
                    return (
                        (n[p] = function () {
                            return 7;
                        }),
                        7 != ""[t](n)
                    );
                }),
                d = v
                    ? !i(function () {
                          var n = !1,
                              e = /a/;
                          return (
                              (e.exec = function () {
                                  return (n = !0), null;
                              }),
                              "split" === t &&
                                  ((e.constructor = {}),
                                  (e.constructor[a] = function () {
                                      return e;
                                  })),
                              e[p](""),
                              !n
                          );
                      })
                    : void 0;
            if (!v || !d || ("replace" === t && !f) || ("split" === t && !s)) {
                var h = /./[p],
                    g = e(u, p, ""[t], function (t, n, e, r, o) {
                        return n.exec === l
                            ? v && !o
                                ? { done: !0, value: h.call(n, e, r) }
                                : { done: !0, value: t.call(e, n, r) }
                            : { done: !1 };
                    }),
                    x = g[0],
                    y = g[1];
                r(String.prototype, t, x),
                    o(
                        RegExp.prototype,
                        p,
                        2 == n
                            ? function (t, n) {
                                  return y.call(t, this, n);
                              }
                            : function (t) {
                                  return y.call(t, this);
                              }
                    );
            }
        };
    },
    function (t, n, e) {
        var r = e(20);
        t.exports = function (t, n, e) {
            if ((r(t), void 0 === n)) return t;
            switch (e) {
                case 1:
                    return function (e) {
                        return t.call(n, e);
                    };
                case 2:
                    return function (e, r) {
                        return t.call(n, e, r);
                    };
                case 3:
                    return function (e, r, o) {
                        return t.call(n, e, r, o);
                    };
            }
            return function () {
                return t.apply(n, arguments);
            };
        };
    },
    function (t, n, e) {
        "use strict";
        var r = e(34)(!0);
        t.exports = function (t, n, e) {
            return n + (e ? r(t, n).length : 1);
        };
    },
    ,
    function (t, n, e) {
        var r = e(2),
            o = e(27),
            i = e(29),
            u = Object.defineProperty;
        n.f = e(11)
            ? Object.defineProperty
            : function (t, n, e) {
                  if ((r(t), (n = i(n, !0)), r(e), o))
                      try {
                          return u(t, n, e);
                      } catch (t) {}
                  if ("get" in e || "set" in e)
                      throw TypeError("Accessors not supported!");
                  return "value" in e && (t[n] = e.value), t;
              };
    },
    function (t, n, e) {
        t.exports =
            !e(11) &&
            !e(3)(function () {
                return (
                    7 !=
                    Object.defineProperty(e(28)("div"), "a", {
                        get: function () {
                            return 7;
                        },
                    }).a
                );
            });
    },
    function (t, n, e) {
        var r = e(4),
            o = e(1).document,
            i = r(o) && r(o.createElement);
        t.exports = function (t) {
            return i ? o.createElement(t) : {};
        };
    },
    function (t, n, e) {
        var r = e(4);
        t.exports = function (t, n) {
            if (!r(t)) return t;
            var e, o;
            if (
                n &&
                "function" == typeof (e = t.toString) &&
                !r((o = e.call(t)))
            )
                return o;
            if ("function" == typeof (e = t.valueOf) && !r((o = e.call(t))))
                return o;
            if (
                !n &&
                "function" == typeof (e = t.toString) &&
                !r((o = e.call(t)))
            )
                return o;
            throw TypeError("Can't convert object to primitive value");
        };
    },
    function (t, n) {
        t.exports = function (t, n) {
            return {
                enumerable: !(1 & t),
                configurable: !(2 & t),
                writable: !(4 & t),
                value: n,
            };
        };
    },
    function (t, n) {
        var e = {}.hasOwnProperty;
        t.exports = function (t, n) {
            return e.call(t, n);
        };
    },
    function (t, n, e) {
        t.exports = e(19)("native-function-to-string", Function.toString);
    },
    function (t, n) {
        t.exports = !1;
    },
    function (t, n, e) {
        var r = e(12),
            o = e(15);
        t.exports = function (t) {
            return function (n, e) {
                var i,
                    u,
                    c = String(o(n)),
                    l = r(e),
                    a = c.length;
                return l < 0 || l >= a
                    ? t
                        ? ""
                        : void 0
                    : (i = c.charCodeAt(l)) < 55296 ||
                      i > 56319 ||
                      l + 1 === a ||
                      (u = c.charCodeAt(l + 1)) < 56320 ||
                      u > 57343
                    ? t
                        ? c.charAt(l)
                        : i
                    : t
                    ? c.slice(l, l + 2)
                    : u - 56320 + ((i - 55296) << 10) + 65536;
            };
        };
    },
    function (t, n, e) {
        var r = e(8),
            o = e(5)("toStringTag"),
            i =
                "Arguments" ==
                r(
                    (function () {
                        return arguments;
                    })()
                );
        t.exports = function (t) {
            var n, e, u;
            return void 0 === t
                ? "Undefined"
                : null === t
                ? "Null"
                : "string" ==
                  typeof (e = (function (t, n) {
                      try {
                          return t[n];
                      } catch (t) {}
                  })((n = Object(t)), o))
                ? e
                : i
                ? r(n)
                : "Object" == (u = r(n)) && "function" == typeof n.callee
                ? "Arguments"
                : u;
        };
    },
    function (t, n, e) {
        "use strict";
        var r = e(13);
        e(16)(
            { target: "RegExp", proto: !0, forced: r !== /./.exec },
            { exec: r }
        );
    },
    function (t, n, e) {
        "use strict";
        var r = e(2);
        t.exports = function () {
            var t = r(this),
                n = "";
            return (
                t.global && (n += "g"),
                t.ignoreCase && (n += "i"),
                t.multiline && (n += "m"),
                t.unicode && (n += "u"),
                t.sticky && (n += "y"),
                n
            );
        };
    },
    function (t, n, e) {
        "use strict";
        var r = e(39),
            o = e(2),
            i = e(40),
            u = e(24),
            c = e(14),
            l = e(21),
            a = e(13),
            f = e(3),
            s = Math.min,
            p = [].push,
            v = 4294967295,
            d = !f(function () {
                RegExp(v, "y");
            });
        e(22)("split", 2, function (t, n, e, f) {
            var h;
            return (
                (h =
                    "c" == "abbc".split(/(b)*/)[1] ||
                    4 != "test".split(/(?:)/, -1).length ||
                    2 != "ab".split(/(?:ab)*/).length ||
                    4 != ".".split(/(.?)(.?)/).length ||
                    ".".split(/()()/).length > 1 ||
                    "".split(/.?/).length
                        ? function (t, n) {
                              var o = String(this);
                              if (void 0 === t && 0 === n) return [];
                              if (!r(t)) return e.call(o, t, n);
                              for (
                                  var i,
                                      u,
                                      c,
                                      l = [],
                                      f =
                                          (t.ignoreCase ? "i" : "") +
                                          (t.multiline ? "m" : "") +
                                          (t.unicode ? "u" : "") +
                                          (t.sticky ? "y" : ""),
                                      s = 0,
                                      d = void 0 === n ? v : n >>> 0,
                                      h = new RegExp(t.source, f + "g");
                                  (i = a.call(h, o)) &&
                                  !(
                                      (u = h.lastIndex) > s &&
                                      (l.push(o.slice(s, i.index)),
                                      i.length > 1 &&
                                          i.index < o.length &&
                                          p.apply(l, i.slice(1)),
                                      (c = i[0].length),
                                      (s = u),
                                      l.length >= d)
                                  );

                              )
                                  h.lastIndex === i.index && h.lastIndex++;
                              return (
                                  s === o.length
                                      ? (!c && h.test("")) || l.push("")
                                      : l.push(o.slice(s)),
                                  l.length > d ? l.slice(0, d) : l
                              );
                          }
                        : "0".split(void 0, 0).length
                        ? function (t, n) {
                              return void 0 === t && 0 === n
                                  ? []
                                  : e.call(this, t, n);
                          }
                        : e),
                [
                    function (e, r) {
                        var o = t(this),
                            i = null == e ? void 0 : e[n];
                        return void 0 !== i
                            ? i.call(e, o, r)
                            : h.call(String(o), e, r);
                    },
                    function (t, n) {
                        var r = f(h, t, this, n, h !== e);
                        if (r.done) return r.value;
                        var a = o(t),
                            p = String(this),
                            g = i(a, RegExp),
                            x = a.unicode,
                            y =
                                (a.ignoreCase ? "i" : "") +
                                (a.multiline ? "m" : "") +
                                (a.unicode ? "u" : "") +
                                (d ? "y" : "g"),
                            m = new g(d ? a : "^(?:" + a.source + ")", y),
                            b = void 0 === n ? v : n >>> 0;
                        if (0 === b) return [];
                        if (0 === p.length) return null === l(m, p) ? [p] : [];
                        for (var S = 0, w = 0, E = []; w < p.length; ) {
                            m.lastIndex = d ? w : 0;
                            var j,
                                _ = l(m, d ? p : p.slice(w));
                            if (
                                null === _ ||
                                (j = s(
                                    c(m.lastIndex + (d ? 0 : w)),
                                    p.length
                                )) === S
                            )
                                w = u(p, w, x);
                            else {
                                if ((E.push(p.slice(S, w)), E.length === b))
                                    return E;
                                for (var O = 1; O <= _.length - 1; O++)
                                    if ((E.push(_[O]), E.length === b))
                                        return E;
                                w = S = j;
                            }
                        }
                        return E.push(p.slice(S)), E;
                    },
                ]
            );
        });
    },
    function (t, n, e) {
        var r = e(4),
            o = e(8),
            i = e(5)("match");
        t.exports = function (t) {
            var n;
            return r(t) && (void 0 !== (n = t[i]) ? !!n : "RegExp" == o(t));
        };
    },
    function (t, n, e) {
        var r = e(2),
            o = e(20),
            i = e(5)("species");
        t.exports = function (t, n) {
            var e,
                u = r(t).constructor;
            return void 0 === u || null == (e = r(u)[i]) ? n : o(e);
        };
    },
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    ,
    function (t, n, e) {
        "use strict";
        e.r(n);
        e(38), e(109);
        var r,
            o,
            i = document.createElement("link");
        (i.href =
            "css/" +
            ((r = (function (t) {
                for (
                    var n = t + "=", e = document.cookie.split(";"), r = 0;
                    r < e.length;
                    r++
                ) {
                    for (var o = e[r]; " " == o.charAt(0); )
                        o = o.substring(1, o.length);
                    if (0 == o.indexOf(n))
                        return o.substring(n.length, o.length);
                }
                return null;
            })("theme")),
            ((o = (function (t) {
                var n = void 0;
                return (
                    location.search
                        .substr(1)
                        .split("&")
                        .some(function (e) {
                            return (
                                e.split("=")[0] == t && (n = e.split("=")[1])
                            );
                        }),
                    n
                );
            })("theme"))
                ? ((function (t, n, e) {
                      var r = "";
                      if (e) {
                          var o = new Date();
                          o.setTime(o.getTime() + 24 * e * 60 * 60 * 1e3),
                              (r = "; expires=" + o.toUTCString());
                      }
                      document.cookie = t + "=" + (n || "") + r + "; path=/";
                  })("theme", o, 7),
                  o)
                : r || "modern") + ".css")),
            (i.type = "text/css"),
            (i.rel = "stylesheet"),
            document.getElementsByTagName("head")[0].appendChild(i);
    },
    function (t, n, e) {
        "use strict";
        var r = e(2),
            o = e(110),
            i = e(21);
        e(22)("search", 1, function (t, n, e, u) {
            return [
                function (e) {
                    var r = t(this),
                        o = null == e ? void 0 : e[n];
                    return void 0 !== o
                        ? o.call(e, r)
                        : new RegExp(e)[n](String(r));
                },
                function (t) {
                    var n = u(e, t, this);
                    if (n.done) return n.value;
                    var c = r(t),
                        l = String(this),
                        a = c.lastIndex;
                    o(a, 0) || (c.lastIndex = 0);
                    var f = i(c, l);
                    return (
                        o(c.lastIndex, a) || (c.lastIndex = a),
                        null === f ? -1 : f.index
                    );
                },
            ];
        });
    },
    function (t, n) {
        t.exports =
            Object.is ||
            function (t, n) {
                return t === n ? 0 !== t || 1 / t == 1 / n : t != t && n != n;
            };
    },
]);
//# sourceMappingURL=settings.js.map
