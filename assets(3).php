var pageflip;var $pb;var firstZoomIn=true;var pf5Events=[];function initPageflip5(workpad){if(!usePf5){return}W.id=workpad.workpad_id;W.key=workpad.workpad_key;W.workpad_key=workpad.workpad_key;var $body=$("body");var useWix=$body.hasClass("wix");var embed=$body.hasClass("embed");var topNavHeight=$(".top-nav").height()||0;var bookletTopNavHeight=$(".booklet-page-nav.top-only").height()||0;var bookletBottomNavHeight=$(".booklet-page-nav.bottom-only").height()+1||0;bookletTopNavHeight+=topNavHeight;bookletSetPages();var pageflipEventCallbackObject={onFlip:function(){if(pf5SecondEvent("onFlip")){return}gridStylesCss(null,true)},onFlipEnd:function(){if(pf5SecondEvent("onFlipEnd")){return}var pageNumber=pageflip.getPN();if(!isPageSpread()){pageNumber=pageNumber/2}changePageComplete();locationSetPage(pageNumber)},onLoad:function(){updateResultDivAsync()},onShow:function(){$("#bookletDiv").show()},onZoomIn:function(){document.addEventListener("wheel",scrollPf5Book);if(firstZoomIn){setTimeout(function(){zoomInTopCorrection()},750)}firstZoomIn=false},onZoomOut:function(){document.removeEventListener("wheel",scrollPf5Book)}};var $pageflip=$("#pageflip");pageflip=$pageflip.pageflip();pageflip.setPFEventCallBack(pageflipEventCallbackObject);$pageflip.pageflipInit({Copyright:Key.Copyright,Key:Key.Key,PageWidth:parseInt(workpad.width),PageHeight:parseInt(workpad.height),FullScreenEnabled:true,SinglePageMode:MOBILE?true:JSON.parse(workpad.singlePageMode),VerticalMode:workpad.transitionDirection==="vertical",RightToLeft:workpad.transitionDirection==="rtl",Margin:0,MarginTop:bookletTopNavHeight+parseInt(workpad.marginTop),MarginLeft:useWix||embed?0:24,MarginRight:useWix||embed?0:24,MarginBottom:bookletBottomNavHeight+parseInt(workpad.marginBottom),AutoScale:true,FullScale:!narrateMode(),FillScale:false,PinchZoom:true,PreflipArea:10,UpScale:false,BookOffsetY:0,AutoStageHeight:true,AutoMaxHeight:true,AlwaysOpened:workpad.alwaysOpened,AutoFlipLoop:-1,CenterSinglePage:true,DropShadow:true,DropShadowOpacity:.3,FlipTopShadowOpacity:.2,FlipShadowOpacity:.2,HardFlipOpacity:.3,NoFlipShadow:false,EmbossOpacity:workpad.disableEmboss?0:.2,SecondaryDragArea:10,Transparency:true,HotKeys:false,HashControl:true,ShowCopyright:false,Thumbnails:false,HardCover:JSON.parse(workpad.hardCover),HardPages:JSON.parse(workpad.hardPage),MouseControl:!JSON.parse(workpad.hasForm)},"pf5");var startPage=getPageParam();if(startPage){gotoPage(startPage)}if(!JSON.parse(workpad.borderShadow)){$("#pf-dropshadow").hide()}$pb=$("#pf-book");if(workpad.scale==="original"&&!$body.hasClass("embed")){pageflip.zoomIn()}gridStylesCss();$global.lastPage=workpad.lastPage;locationSetPage(startPage);pf5SetActiveContent()}function scrollPf5Book(e){var pfTransform=$pb.css("transform");var t=pfTransform.match(/([-.\d]+)/g);var x=t[4];var y=t[5];var $body=$("body");var bookWidth=W["width"]*(isShowingSinglePage()?1:2);var documentWidth=$body.width();if(bookWidth>documentWidth){var minX=-bookWidth+documentWidth-40;x-=parseInt(e.deltaX);x=x>0?0:x<minX?minX:x}var footerAllowance=$body.hasClass("design")?200:100;var minY=-$pb.height()+$body.height()-footerAllowance;y-=parseInt(e.deltaY);y=y>0?0:y<minY?minY:y;t[4]=x;t[5]=y;var newTransform="matrix("+t.join(",")+")";$pb.css("transform",newTransform)}function zoomInTopCorrection(){$("#pf-book").css("transition","transform .2s");scrollPf5Book({deltaX:0,deltaY:-1e4});setTimeout(function(){$("#pf-book").css("transition","transform 0s")},200)}function pf5ChangePage(newCurrentPage){var newPf5Page=isRightToLeft()?$global.lastPage-(newCurrentPage-1):newCurrentPage+1;if(pageflip&&typeof pageflip.gotoPage==="function"){pageflip.gotoPageNumber(newPf5Page,true)}$global.currentPage=newCurrentPage-$global.firstPage;locationSetPage($global.currentPage)}function pf5SecondEvent(event){var lastTime=typeof pf5Events[event]==="undefined"?0:pf5Events[event];var now=Date.now();if(now-lastTime<50){return true}else{pf5Events[event]=now;return false}}function pf5SetActiveContent(){$(".type-CONTACT_FORM, .type-TEXT_FROALA_FORM, .type-LEAD_GOOGLE_FORM").addClass("pf-activecontent")}
/*
 Iparigrafika Pageflip5 - V1.7 - Pageflip Based on HTML5/CSS3/JS/JQUERY
 Coded By Abel Vincze (C) 2004-2018 - available at http://pageflip-books.com
 This code was released as minified on 2018/03/08
 */
var _gaq = _gaq || [];
(function(hG, hF, hE) {
  var hD, hC, hB, hA, hz, hy, hj, hh, hf, hd, hb, g9, g7, g6, g5, g3, g1, gZ, gX, gV, gT, gS, go, gm, gk, gi, gg, ge, gH, gG, gF, gD, gB, gz, gx, gv, gt, gs, fS, fQ, fO, fM, fK, fI, gb, ga, f9, f7, f5, f3, f1, fZ, fX, fW, fm, fk, fi, fg, fe, fc, fF, fE, fD, fB, fz, fx, fv, ft, fr, fq, eB, ez, ex, ew, ev, eu, e4, e2, e0, eX, eU, eR, eP, eN, eL, eK, dQ, dN, dL, dK, dJ, dI, eo, em, ek, eh, ee, eb, d9, d7, d5, d4, c3, c0, cY, cX, cW, cV, dz, dw, dt, dq, dn, dl, dk, dj, di, dh, ch, ce, cc, cb, ca, b9, cM, cJ, cG, cD, cB, cz, cy, cx, cw, cv, bv, bs, bq, bp, bo, bn, b0, bX, bU, bR, bP, bN, bM, bL, bK, bJ, aT, aQ, aO, aN, aM, aL, hx, hw, hv, hu, ht, hs, hr, hq, hp, ho, g4, g2 = "ontouchstart" in hF,
    g0 = {
      a: "touchstart",
      b: "touchmove",
      c: "touchend"
    },
    gY = {
      a: "mousedown",
      b: "mousemove",
      c: "mouseup"
    },
    gW = Math,
    gU = gW.PI,
    hn, hm = ["left", "right"],
    hl = false,
    hk = true,
    hi = gW.sin,
    hg = gW.asin,
    he = gW.cos,
    hc = gW.sqrt,
    ha = gW.abs,
    g8 = gW.floor,
    gE = gW.ceil,
    gC = gW.round,
    gA = gW.random,
    gy, gw, gu, gR, gQ = "toUpperCase",
    gP = "charCodeAt",
    gO = "length",
    gN = "get",
    gM = "UTC",
    gL = gN + gM,
    gN = gL + "FullYear",
    gM = gL + "Month",
    gL = gL + "Date",
    gK = "location",
    gJ = "href",
    gI = "offline",
    f8 = "online",
    f6 = "split",
    f4 = "substr",
    f2 = "file:",
    f0 = "www",
    fY = "/",
    gr = "fromCharCode",
    gq = "top",
    gp = "auto",
    gn = 85,
    gl = gn * 3,
    gj = gl + 1,
    gh = 6,
    gf = 8,
    gd = 1000,
    gc = 50,
    fC = gj >> 2,
    fA, fy, fw, fu = '<svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="40px" viewBox="0 0 26 40" xml:space="preserve"><g><path d="M21.544,0.515c-0.688-0.687-1.801-0.687-2.488,0L0.815,18.756c-0.687,0.687-0.687,1.8,0,2.488l18.241,18.241 c0.688,0.687,1.801,0.687,2.488,0l3.938-3.938c0.688-0.688,0.688-1.801,0-2.488L12.397,20.026L25.481,6.94 c0.688-0.686,0.688-1.8,0-2.487L21.544,0.515z"/></g></svg>',
    fs = '<svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="40px" viewBox="0 0 26 40" xml:space="preserve"><g><path d="M4.456,39.485c0.688,0.687,1.801,0.687,2.488,0l18.24-18.241c0.687-0.687,0.687-1.801,0-2.488L6.944,0.515 c-0.688-0.687-1.801-0.687-2.488,0L0.519,4.453c-0.688,0.688-0.688,1.801,0,2.488l13.084,13.033L0.519,33.06 c-0.688,0.687-0.688,1.801,0,2.487L4.456,39.485z"/></g></svg>',
    fV = function(hI) {
      var hH, hK = 0.3;
      hC = hI.IDs, c3 = hI.FlipWorld || hl, c0 = hI.src || "", hB = hI.DefaultID, hA = hI.PageWidth || 300, hz = hI.PageHeight || 400, hy = hI.CoverWidth || hA, hj = hI.CoverHeight || hz, hd = hI.HardCover == hE ? hk : hI.HardCover, hb = hI.HardPages || hl, hh = hI.StageWidth, hf = hI.StageHeight, hH = hI.Margin, g7 = hH == hE ? 32 : hH, hH = hI.MarginTop, g6 = hH == hE ? g7 : hH, hH = hI.MarginBottom, g5 = hH == hE ? g7 : hH, hH = hI.MarginLeft, g3 = hH == hE ? g7 : hH, hH = hI.MarginRight, g1 = hH == hE ? g7 : hH, gZ = hI.MobileStageMaxWidth || (c3 ? 640 : 0), hH = hI.MMargin, gX = hH == hE ? (c3 ? 0 : 32) : hH, hH = hI.MMarginTop, gV = hH == hE ? gX : hH, hH = hI.MMarginBottom, gT = hH == hE ? (c3 ? 50 : gX) : hH, hH = hI.MMarginLeft, gS = hH == hE ? gX : hH, hH = hI.MMarginRight, go = hH == hE ? gX : hH, fK = hI.VerticalMode || hl, d4 = hI.SinglePageMode || hl, cY = hI.AutoSinglePageMode || hl;
      if (d4) {
        cY = hl
      }
      fI = (hI.RightToLeft && !fK) || hl, gb = hI.AlwaysOpened || hl, gm = hI.AutoScale || hl, gk = hI.FullScale || hl, gi = hI.FillScale || hl, gg = hI.UpScale || hl, g9 = hI.CenterSinglePage || hl, gF = hI.ScaleToSinglePage || hl, ge = hI.AutoStageHeight || hl;
      if (gk || gi || gg) {
        ge = hl
      }
      gH = hI.AutoMaxHeight || hl;
      gG = hI.MaxHeightOffset || 0, gD = hI.FlexibleContent || hl, hH = hI.FlexibleContentMinWidth, gB = hH == hE ? 768 : hH, hH = hI.StartPage, gz = hH == hE ? 1 : hH, gx = hI.MinPageLimit || 0;
      if (gz < gx) {
        gz = gx
      }
      gv = hI.MaxPageLimit, gt = hI.StartAutoFlip || hl, hH = hI.AutoFlipEnabled, gs = hH == hE ? hk : hH, fS = hI.FullScreenEnabled || hl, fQ = hI.AutoFlipInterval || 2000, fO = hI.AutoFlipLoop || 0, fM = hI.NavigationLoop || hl, ga = hI.PageDataFile, hH = hI.Preflip, f9 = hH == hE ? hk : hH, f7 = hI.ControlbarFile, f5 = hI.ControlbarToFront || hl, f3 = hI.Thumbnails || hl, hH = hI.ThumbnailsLazyLoad, f1 = hH == hE ? hk : hH, hH = hI.ThumbnailsToFront, fZ = hH == hE ? hk : hH, fX = hI.ThumbnailsAutoHide || 0, fW = hI.ThumbnailsHidden || hl, fm = hI.ThumbnailWidth || 60, fk = hI.ThumbnailHeight || 80, fi = hI.ThumbnailAlwaysCentered || hl, fg = hI.ThumbnailControls || hl, fe = hI.Transparency || hl, hH = hI.PageCache, fc = hH == hE ? 1 : hH, fF = hI.NoFlipShadow || hl, hH = hI.DropShadow, fE = hH == hE ? hk : hH, hH = hI.Emboss, fD = hH == hE ? hk : hH, hH = hI.DropShadowOpacity, fB = hH == hE ? hK : hH, hH = hI.FlipTopShadowOpacity, fz = hH == hE ? hK : hH, hH = hI.FlipShadowOpacity, fx = hH == hE ? hK : hH, hH = hI.EmbossOpacity, ft = hH == hE ? hK : hH, hH = hI.HardFlipShadowOpacity, fv = hH == hE ? hK : hH, fr = hI.PreflipArea || 128, hH = hI.ClickFlip, fq = hH == hE ? hk : hH, eB = hI.SecondaryDragArea || 64, ez = hI.InsideDragArea || 0, ex = hI.FlipDuration || 800, ew = hI.DisableBackgroundEvents || hl, ev = hI.BookOffsetX || 0, eu = hI.BookOffsetY || 0;
      e4 = hI.TearDistance || 100, e2 = bs ? hI.PerformanceAware || hl : hk, e0 = c3 ? "#~# \u2013 #" : (hI.PagerText || "Page #~Pages #-#"), hH = hI.PagerSkip, eX = hH == hE ? hk : hH, eU = hI.HideCopyright || hl, eo = hI.HashControl || hl, hH = hI.ZoomEnabled, eR = hH == hE ? hk : hH, eP = hI.ClickZoom || hl, hH = hI.ZoomFlip, eN = hH == hE ? hk : hH, hH = hI.PinchZoom, eL = hH == hE ? hl : hH, hH = hI.HotKeys, eK = hH == hE ? hk : hH, hH = hI.MouseControl, dQ = hH == hE ? hk : hH, dN = hI.GoogleAnalytics, dL = hI.ShareLink || "http://pageflip-books.com", dK = hI.ShareText || "Pageflip5, The Book Template for the Web", dJ = hI.ShareVia || "@MaccPageFlip", dI = hI.ShareImageURL, em = hI.Copyright, ek = hI.FWCopyright || em, eh = hI.ShowCopyright || hl, ee = hI.Key, eb = hk, d7 = hI.Preview ? "?" + gC(gA() * 10000) : "", d5 = hI.DisableSelection || hl, hH = hI.ShareOnTwitter, cX = hH == hE ? hk : hH, hH = hI.ShareOnFacebook, cW = hH == hE ? hk : hH, hH = hI.ShareOnPinterest, cV = hH == hE ? hk : hH, hH = hI.ShareOnGoogle, dz = hH == hE ? hk : hH;
      dw = gb;
      dt = g9;
      dq = gF;
      dn = ez;
      dl = eu;
      dk = ev;
      if (dI && dI.lastIndexOf("://") == -1) {
        var hJ = hF[gK][gJ][f6]("#")[0][f6](fY);
        hJ.splice(hJ.length - 1, 1);
        hJ = hJ.join(fY) + fY;
        dI = hJ + dI
      }
    },
    fU = function() {
      gb = hl;
      g9 = hl;
      gF = hk;
      ez = eB;
      if (fK) {
        eu = dl - hj / 2
      } else {
        if (fI) {
          ev = dl + hy / 2
        } else {
          ev = dl - hy / 2
        }
      }
    },
    fT = function() {
      gb = dw;
      g9 = dt;
      gF = dq;
      ez = dn;
      eu = dl;
      ev = dk
    },
    fR = function() {
      cB = cz = 0;
      cy = 1;
      eb = eO(ee);
      fP()
    },
    fP = function() {
      cG = hy * (fK ? 1 : 2);
      cD = hj * (fK ? 2 : 1);
      cx = hy > hA || hj > hz;
      cw = gE(ag(hA, hz) / 2) * 2;
      cv = gE(ag(hy, hj) / 2) * 2;
      fA = fK ? 1 : 2;
      fy = 3 - fA;
      fw = fK ? -1 : 1
    },
    fN = function() {
      hv = [];
      hu = [];
      hr = [];
      ht = [];
      hs = [];
      ho = [];
      g4 = []
    },
    fL = function() {
      bp = hl;
      bn = [];
      aW = [];
      bN = 4;
      bK = hl, bJ = hl, aT = hl, aQ = hl, aO = hl;
      aM = aL = hx = hw = 0;
      fa = ei = ef = ec = ea = d8 = d6 = eJ = hE
    },
    fJ = function() {
      hr = [];
      hu = [];
      ht = [];
      ch.empty();
      eF()
    },
    fH = function(hQ) {
      fN();
      for (var hP = 0, hO = 0, hN = 0, hM = 1, hL, hK, hJ, hI = hl, hH, hS, hR; hO < hQ.length; hO++) {
        hK = hG(hQ[hO]);
        hJ = (hL = hK.attr("class")) == "cover";
        if (hJ) {
          hI = hJ
        }
        hH = (hL == "outerpage");
        if (d4) {
          hH = hl
        }
        hS = (hH || hJ);
        if (!hJ && hL != "page" && !hH) {
          continue
        }
        if (hP == 0 && !hH && !gb) {
          eS(hN++, {
            h: 0,
            l: hl
          })
        } else {
          if (d4) {
            eS(hN++, eQ(hG("<div class='page'></div>")))
          }
        }
        if (hP == 0 && hH) {
          gb = hl
        }
        hR = eQ(hK, hH, hJ, hS);
        if (hR.h == hE) {
          hR.h = hM++
        } else {
          if (hR.h > 0) {
            hM = hR.h + 1
          }
        }
        eS(hN++, hR);
        hP++
      }
      cJ = hN - 1;
      eV();
      if (fI) {
        hv.reverse()
      }
      if (!hI) {
        cx = hl
      }
      by(gx, hE);
      bE()
    },
    fG = function(hQ, hS, hR) {
      hS = hS || cM;
      hR = hR || hl;
      if (hS == 0 && !gb) {
        hS++
      }
      for (var hP = 0, hO = 0, hN = hS, hM = 1, hL, hK, hJ, hI = hl, hH, hU, hT; hO < hQ.length; hO++) {
        hK = hG(hQ[hO]);
        hJ = (hL = hK.attr("class")) == "cover";
        if (hJ) {
          hI = hJ
        }
        hH = (hL == "outerpage");
        hU = (hH || hJ);
        if (!hJ && hL != "page" && !hH) {
          continue
        }
        hT = eQ(hK, hH, hJ, hU);
        cJ++;
        hv.splice(hS, 0, hT);
        hP++
      }
      eV();
      by();
      bE();
      fJ()
    },
    eY = function(hJ, hH, hI) {
      hJ = hJ || cM;
      hH = hH || 1;
      hI = hI || hl;
      if (hJ == 0 && !gb) {
        hJ++
      }
      hv.splice(hJ, hH);
      cJ -= hH;
      eV();
      by();
      bE();
      if (cM > cJ) {
        cM = cJ - cJ % 2
      }
      if (cM < 0) {
        cM = 0
      }
      fJ()
    },
    eV = function() {
      if (cJ % 2 == 0) {
        if (!hv[cJ]["l"]) {
          hv.splice(cJ, 1);
          cJ--
        } else {
          eS(++cJ, {
            h: 0,
            l: hl
          })
        }
      }
    },
    eS = function(hI, hH) {
      hv[hI] = hH
    },
    eQ = function(hO, hM, hN, hL) {
      hM = hM || hl;
      hN = hN || hl;
      hL = hL || hl;
      var hK = hO.data(),
        hI = hK.disableEmbossing,
        hJ = {
          a: !(hK.unload == hl),
          w: hK.backgroundFile,
          r: hK.htmlFile,
          s: hO.html(),
          c: hK.thumbnailImage,
          u: hI == hE ? !fD : hI,
          b: hK.transparentPage == hk,
          g: hK.removablePage == hk,
          d: hl,
          h: hM ? 0 : hK.pageNumber,
          i: hK.pageName,
          j: hK.pageLabel,
          x: hK.autoFlipInterval,
          v: hK.data,
          e: hL ? hy : hA,
          f: hL ? hj : hz,
          m: hN ? cv : cw,
          p: hN ? hd : hb || (hK.hard == hk),
          q: hL,
          k: hM,
          l: hk
        };
      if (c3 && c0 != "" && hK.d) {
        var hH = hK.d["split"](",");
        hJ.w = c0 + "page" + hH[0] + ".jpg" + d7;
        if (hH[1] == 1) {
          hJ.c = c0 + "page" + hH[0] + "_th.jpg" + d7
        }
        if (hH[2] == 1) {
          hJ.j = "t" + hH[0]
        }
      }
      if (hJ.p) {
        hJ.u = hk
      }
      hJ.o = !hJ.r;
      return hJ
    },
    eO = function(hW) {
      gn *= 2;
      hW = fl(fh(fd(fb(hW)), 113));
      for (var hV = hW[gO], hT = 0, hU, hH = 0; hH < hV - 3; hH++) {
        hT += hW[hH]
      }
      if (hW[0] == gn && hW[hV - 1] == gn && hV == hW[hV - 2] && (hT & gl) == hW[hV - 3]) {
        hU = hk
      }
      if (hU && hW[4] == 1) {
        var hS = d2(),
          hR = (2 * gd + hW[5]) * gd + (hW[6]) * gc + hW[7],
          hQ = (hS[gN]()) * gd + (hS[gM]() + 1) * gc + hS[gL]();
        hU = hQ <= hR
      }
      if (hU) {
        var hO = hF[gK][gJ][f6](fY),
          hM, hL;
        if (hO[0] == f2) {
          hM = hO = hL = gI
        } else {
          hO = hO[2];
          hL = f8;
          if (hO[f6](".")[0] == f0) {
            hO = hO[f4](4)
          }
          hM = hO[f6](".");
          if (hM[gO] > 2) {
            hM[0] = "*"
          }
          hM = hM.join(".")
        }
        var hK = hW[4] == 1 ? 8 : 5;
        if (hU = fp(eM(escape(em)), {
            a: hW[hK++],
            b: hW[hK++]
          })) {
          var hJ = eM(escape(hO)[f6]("%3A")["join"](":")),
            hI = eM(escape(hM)[f6]("%3A")["join"](":")),
            hP = eM(escape(hL)),
            hN = hW[hK++];
          while (hN-- && !(hU = (fp(hJ, {
            a: hW[hK],
            b: hW[hK + 1]
          }) || fp(hI, {
            a: hW[hK],
            b: hW[hK + 1]
          }) || fp(hP, {
            a: hW[hK++],
            b: hW[hK++]
          })))) {}
        }
        if (hU) {
          gw = gn + 10;
          gu = 2;
          gy = gw / gu;
          gR = gy + 10;
          hn = gw / gU
        }
      }
      return hU
    },
    eM = function(hM) {
      hM = hM[gQ]();
      for (var hL = 0, hK = 1, hH = 0, hJ = 0, hI; hJ < hM[gO]; hJ++) {
        hI = hM[gP](hJ) - fC / 2;
        hI = hI == 0 ? 1 : hI;
        (hI < 0 || hI >= fC) ? hI = 0: hL += hI, hK *= -1, hK += hI + hL % 8, hL += hK % 16, hH++
      }
      return {
        a: hL & gl,
        b: fj((hK + hH) & gl)
      }
    },
    fp = function(hI, hH) {
      return hI.a == hH.a && hI.b == hH.b
    },
    fo = function() {
      return fn(97, 123) + fn(fC + 1, 91) + fn(47, 58) + String[gr](36)
    },
    fn = function(hK, hJ) {
      for (var hI = "", hH = hK; hH < hJ; hH++) {
        hI += String[gr](hH)
      }
      return hI
    },
    fl = function(hI) {
      for (var hH = hI[gO], hL = fj(gn - hI[0]), hK = [], hJ = 0; hJ < hH; hJ++) {
        hK[hJ] = (hI[hJ] + hL) & gl
      }
      return hK
    },
    fj = function(hH) {
      return hH < 0 ? hH + gj : hH
    },
    fh = function(hH, hL) {
      for (var hK = hL, hJ = hH[gO], hM = hH, hI = 0; hI < hJ; hI++) {
        hK = ff(hM, hI, hK)
      }
      for (var hK = hL, hI = hJ - 1; hI >= 0; hI--) {
        hK = ff(hM, hI, hK)
      }
      return hM
    },
    ff = function(hJ, hH, hI) {
      if ((hJ[hH] -= hI) < 0) {
        hJ[hH] += gj
      }
      return hJ[hH]
    },
    fd = function(hI) {
      var hK = 0,
        hJ = 0,
        hM = 0,
        hN = [],
        hH = hI[gO],
        hL = g8((hH * 6) / 8);
      hI.push(hK, hJ);
      while (hJ++ < hL) {
        hN.push(((hI[hM] + fC * hI[hM + 1] + fC * fC * hI[hM + 2]) >> hK) & gl);
        hK += 8;
        while (hK >= 6) {
          hK -= 6;
          hM++
        }
      }
      return hN
    },
    fb = function(hI) {
      for (var hH = hI[gO], hL = [], hK = fo(), hJ = 0; hJ < hH; hJ++) {
        hL.push(hK.lastIndexOf(hI[f4](hJ, 1)))
      }
      return hL
    },
    fa, ei, ef, ec, ea, d8, d6, eJ, eI = function(hH) {
      d6 = d6 < hH ? hH : d6
    },
    eH = function(hH) {
      ea = ea < hH ? hH : ea
    },
    eG = function() {
      var hI = ev - ((g9 && !fK) ? gC((d6 - ea) / 2) : 0),
        hH = eu - ((g9 && fK) ? gC((d6 - ea) / 2) : 0);
      if (cB == hI && cz == hH) {
        return
      }
      bv = hk;
      cB = hI, cz = hH;
      ce.css({
        transform: ah(cB, cz)
      })
    },
    eF = function() {
      var hM = hu,
        hL = hr,
        hK = [],
        hJ = [],
        hI = [],
        hH = [],
        ih = [],
        ig = cM,
        ie = cM + 1;
      ea = d6 = ei = ec = 0;
      bo = [];
      if (bp) {
        if (b0 < 0) {
          ig = bP
        } else {
          ie = bP + 1
        }
        for (var ic = 0, id, h1; ic < bn.length; ic++) {
          id = bn[ic]["k"], h1 = bn[ic]["w"];
          hv[id]["t"] = hv[h1]["t"] = hv[h1]["y"] = hk;
          hv[id]["y"] = hl;
          if (bn[ic]["s"] != 1) {
            bo.splice(0, 0, id);
            bo.push(h1)
          } else {
            bo.splice(ic, 0, h1);
            bo.splice(ic, 0, id)
          }
          if (!bn[ic]["l"]) {
            ih.push({
              e: 0,
              p: id
            });
            ih.push({
              e: 0,
              p: h1
            });
            bn[ic]["l"] = hk
          }
          if (hv[id]["v"]) {
            ak(3, id);
            hv[id]["v"] = hl
          }
          if (hv[h1]["v"]) {
            ak(3, h1);
            hv[h1]["v"] = hl
          }
        }
      }
      hr = [];
      var h0 = ig,
        hZ = hv[h0]["l"],
        hY = hZ ? fc : 0;
      while (h0 >= 0) {
        if (hZ || ((hv[h0]["q"] && !hv[h0]["k"]) && cx)) {
          hK.push(h0);
          hZ = (fe && hv[h0]["b"])
        } else {
          if (hY > 0) {
            if (hv[h0]["l"]) {
              hr.push(h0)
            }
            if (hv[h0 + 1]["l"]) {
              hr.push(h0 + 1)
            }
            hY--
          }
        }
        if (!hZ && hY == 0 && h0 > 4) {
          h0 = 2
        } else {
          h0 -= 2
        }
      }
      var hX = ie;
      hZ = hv[hX]["l"];
      hY = hZ ? fc : 0;
      while (hX <= cJ) {
        if (hZ || ((hv[hX]["q"] && !hv[hX]["k"]) && cx)) {
          hJ.push(hX);
          hZ = (fe && hv[hX]["b"])
        } else {
          if (hY > 0) {
            if (hv[hX - 1]["l"]) {
              hr.push(hX - 1)
            }
            if (hv[hX]["l"]) {
              hr.push(hX)
            }
            hY--
          }
        }
        if (!hZ && hY == 0 && hX < cJ - 4) {
          hX = cJ - 2
        } else {
          hX += 2
        }
      }
      hu = [];
      var hW = hK.length,
        ib = hJ.length,
        ia = hW > ib ? hW : ib,
        h9, hT;
      for (var ic = 0; ic < ia; ic++) {
        if (ic < ib) {
          hT = hJ[ic];
          h9 = hv[hT];
          eI(fK ? h9.f : h9.e);
          if (!h9.k) {
            ec = d6
          }
          hu.splice(0, 0, hT);
          h9.t = hl;
          if (ic == 0 && !bp) {
            if (!h9.v) {
              ih.push({
                e: 2,
                p: hT
              });
              h9.v = hk
            }
          } else {
            if (h9.v) {
              ak(3, hT);
              h9.v = hl
            }
          }
        }
        if (ic < hW) {
          hT = hK[ic];
          h9 = hv[hT];
          eH(fK ? h9.f : h9.e);
          if (!h9.k) {
            ei = ea
          }
          hu.splice(0, 0, hT);
          hv[hK[ic]]["t"] = hl;
          if (ic == 0 && !bp) {
            if (!h9.v) {
              ih.push({
                e: 2,
                p: hT
              });
              h9.v = hk
            }
          } else {
            if (h9.v) {
              ak(3, hT);
              h9.v = hl
            }
          }
        }
      }
      fa = ea, ef = d6;
      if (bp) {
        hu = hu.concat(bo)
      } else {
        eG()
      }
      if ((bp && (!hd || e2)) || !bp) {
        eC(ei, ec)
      }
      for (var ic = 0; ic < hu.length; ic++) {
        hT = hu[ic];
        if (hM.lastIndexOf(hT) < 0) {
          hI.push(hT)
        }
      }
      hI = hI.concat(hr);
      for (var ic = 0; ic < hM.length; ic++) {
        hT = hM[ic];
        if (hu.lastIndexOf(hT) < 0) {
          hH.push(hT)
        }
      }
      for (var ic = 0; ic < hL.length; ic++) {
        hT = hL[ic];
        if (hr.lastIndexOf(hT) < 0 && hu.lastIndexOf(hT) < 0) {
          hH.push(hT)
        }
      }
      for (var ic = 0, h8; ic < hH.length; ic++) {
        h8 = hH[ic];
        hQ = ht.lastIndexOf(h8);
        hT = hv[h8];
        if (hT.v) {
          ih.push({
            e: 3,
            p: h8
          });
          h9.v = hl
        }
        if (hT.a !== hl) {
          if (hQ >= 0) {
            ht.splice(hQ, 1)
          }
          ak(5, h8);
          hT["$p"]["remove"]();
          if (hT.n) {
            hT.n = hl;
            hT["$m"]["remove"]();
            if (hT["$fsc"]) {
              hT["$fsc"]["remove"]()
            }
          }
          if (hT["$hts"]) {
            hT["$hts"]["remove"]();
            hT["$hts"] = hE
          }
        } else {
          if (hQ < 0) {
            if (hT.n) {
              eE(h8)
            }
            hT["$p"]["css"]("display", "none");
            ht.push(h8);
            ih.push({
              e: 7,
              p: h8
            })
          }
        }
      }
      for (var ic = 0, h7, h6, h5, h4, h3, h2, hS, hR, hQ, hP; ic < hI.length; ic++) {
        h7 = hI[ic];
        hQ = ht.lastIndexOf(h7);
        hP = hr.lastIndexOf(h7);
        if (hQ >= 0) {
          if (hP < 0) {
            ht.splice(hQ, 1);
            hv[h7]["$p"]["css"]("display", "");
            ih.splice(0, 0, {
              e: 8,
              p: h7
            })
          }
        } else {
          if (hP < 0) {
            ih.splice(0, 0, {
              e: 8,
              p: h7
            })
          }
          ch.append(aG(h7));
          h6 = hv[h7]["$p"] = a5(h7);
          ih.splice(0, 0, {
            e: 4,
            p: h7
          });
          h4 = hv[h7]["e"];
          h3 = hv[h7]["f"];
          if (fK) {
            hS = (hy - h4) / 2;
            h2 = h7 % 2 ? hj : hj - h3;
            hR = gp
          } else {
            h2 = (hj - h3) / 2;
            hS = h7 % 2 ? gp : hy - h4;
            hR = h7 % 2 ? hy - h4 : gp
          }
          h6.css({
            position: "absolute",
            overflow: "hidden",
            width: h4,
            height: h3,
            top: h2,
            left: hS,
            right: hR
          });
          h5 = hv[h7]["$c"] = a4(h7);
          if (hv[h7]["w"]) {
            h6.css("backgroundImage", "url('" + hv[h7]["w"] + "')")
          }
          h5.html(hv[h7]["s"]);
          if (hv[h7]["r"]) {
            h5.load(hv[h7]["r"], "GET")
          }
          if (!hv[h7]["q"] && !hv[h7]["u"]) {
            h5.after(a6("pf-emboss-" + (h7 % 2 ? "right" : "left"), "page" + h7 + "emboss"));
            a3(h7)["css"]({
              position: "absolute",
              overflow: "hidden",
              width: gR,
              height: (fK ? h4 : h3),
              top: (fK ? (h7 % 2 ? -h4 / 2 : h3 - h4 / 2) : 0),
              left: (fK ? (h7 % 2 ? "50%" : gp) : (h7 % 2 ? 0 : gp)),
              right: (fK ? (h7 % 2 ? gp : "50%") : (h7 % 2 ? gp : 0)),
              "transform-origin": (fK ? (h7 % 2 ? "0% 50%" : "100% 50%") : ""),
              transform: (fK ? "rotate(90deg)" : ""),
              opacity: ft
            })
          }
          if (hP >= 0) {
            h6.css("display", "none");
            ht.push(h7);
            ih.push({
              e: 7,
              p: h7
            });
            ho[h7] = new Image();
            if (hv[h7]["w"]) {
              ho[h7]["src"] = hv[h7]["w"]
            }
          }
        }
      }
      for (var ic = 0, h7, hO, h6, h4, h3, hN = 2; ic < hu.length; ic++) {
        h7 = hu[ic], hO = hv[h7], h6 = hO["$p"], h4 = hO.e, h3 = hO.f;
        if (hO.t && hO.n) {
          if (!fF && hO.y) {
            hO["$fsc"]["css"]({
              "z-index": hN++
            })
          }
          hO["$m"]["css"]({
            "z-index": hN++
          })
        } else {
          if (hO.t && !hO.n) {
            if (bX == 2) {
              h6.css({
                "z-index": hN++,
                "transform-origin": fK ? (h7 % 2 ? "50% 0%" : "50% 100%") : (h7 % 2 ? "0% 50%" : "100% 50%"),
                "backface-visibility": "visible"
              });
              if (!fF && !hO["$hts"]) {
                hO["$c"]["after"](a6("pf-hard-topshadow", "page" + h7 + "hardtopshadow"));
                hO["$hts"] = aP(h7);
                hO["$hts"]["css"]({
                  position: "absolute",
                  top: 0,
                  left: 0,
                  width: "100%",
                  height: "100%",
                  background: "rgba(0,0,0," + fv + ")"
                })
              }
            } else {
              h6.wrap(a6("pf-mask", "page" + h7 + "mask"));
              hO["$m"] = a1(h7);
              var hV = hO.m,
                hU = -hO.y;
              hO["$m"]["css"]({
                position: "absolute",
                right: fK ? gp : "50%",
                top: fK ? hj - hV : (hj - hV) / 2,
                left: fK ? (hy - hV) / 2 : gp,
                width: hV,
                height: hV,
                "transform-origin": fK ? "50% 100%" : "100% 50%",
                overflow: "hidden"
              });
              h6.css({
                top: fK ? gp : (hV - h3) / 2,
                bottom: fK ? (h7 % 2 ? -h3 : 0) : gp,
                left: gp,
                right: fK ? (hV - h4) / 2 : (h7 % 2 ? -h4 : 0),
                "z-index": ""
              });
              if (!fF) {
                if (hU) {
                  hO["$c"]["after"](a6("pf-flip-topshadow", "page" + h7 + "fliptopshadow"));
                  hO["$fts"] = aS(h7);
                  hO["$fts"]["css"]({
                    position: "absolute",
                    top: (h3 - hV) / 2,
                    left: h4 / 2 - gR,
                    width: gR,
                    height: hV,
                    "transform-origin": "100% 50%",
                    overflow: "hidden",
                    opacity: fz
                  });
                  hO["$m"]["before"](a6("pf-flip-shadow-container", "page" + h7 + "flipshadowcontainer", a6("pf-flip-shadowA", "page" + h7 + "flipshadowA") + a6("pf-flip-shadowB", "page" + h7 + "flipshadowB")));
                  hO["$fsc"] = aZ(h7);
                  hO["$fsA"] = aX(h7);
                  hO["$fsB"] = aV(h7);
                  eD(h7, hN++, h3, h4, hV)
                }
              }
              hO["$m"]["css"]({
                "z-index": hN++
              });
              hO.n = hk
            }
          } else {
            if (!hO.t && hO.n) {
              eE(h7);
              h6.css("z-index", hN++)
            } else {
              if (hO["$hts"]) {
                hO["$hts"]["remove"]();
                hO["$hts"] = hE
              }
              h6.css("z-index", (hO.k ? 0 : hN++))
            }
          }
        }
      }
      for (ic = 0; ic < ih.length; ic++) {
        ak(ih[ic]["e"], ih[ic]["p"])
      }
      db();
      n();
      if (f3) {
        dx()
      }
    },
    eE = function(hI) {
      var hJ = hv[hI],
        hH = hJ["$p"],
        hL = hJ.e,
        hK = hJ.f;
      hH.unwrap();
      hH.css({
        top: fK ? (hI % 2 ? hj : hj - hK) : (hj - hK) / 2,
        left: fK ? gp : (hI % 2 ? gp : hy - hL),
        right: fK ? (hy - hL) / 2 : (hI % 2 ? hy - hL : gp),
        "transform-origin": "",
        "backface-visibility": ""
      });
      if (hJ["$fsc"]) {
        hJ["$fsc"]["remove"]();
        hJ["$fsc"] = hJ["$fsA"] = hJ["$fsB"] = hE
      }
      if (hJ["$fts"]) {
        hJ["$fts"]["remove"]();
        hJ["$fts"] = hE
      }
      hJ.n = hl
    },
    eD = function(hH, hI, hK, hL, hJ) {
      hv[hH]["$fsc"]["css"]({
        "z-index": hI++,
        position: "absolute",
        top: fK ? hj - hK : (hj - hK) / 2,
        left: fK ? (hy - hL) / 2 : hy - hL,
        width: fK ? hL : 2 * hL,
        height: fK ? hK * 2 : hK,
        overflow: "hidden",
        opacity: fx
      });
      hv[hH]["$fsA"]["css"]({
        position: "absolute",
        top: fK ? hK - hJ : hK / 2 - hJ,
        right: fK ? hL / 2 : hL,
        width: gR,
        height: hJ * 2,
        "transform-origin": "100% 50%",
        overflow: "hidden"
      });
      hv[hH]["$fsB"]["css"]({
        position: "absolute",
        top: fK ? hK - hJ / 2 : (hK - hJ) / 2,
        left: fK ? hL / 2 : hL,
        width: gR,
        height: hJ,
        "transform-origin": "0% 50%",
        overflow: "hidden"
      })
    },
    eC = function(hJ, hI) {
      if (!fE) {
        return
      }
      if (hJ == d8 && hI == eJ) {
        return
      }
      d8 = hJ, eJ = hI;
      var hH = (hJ + hI) / (fK ? cD : cG);
      if (fK) {
        cc.css({
          transform: ah(0, cD / 2 - hJ) + "scaleY(" + hH + ")"
        })
      } else {
        cc.css({
          transform: ah(cG / 2 - hJ, 0) + "scaleX(" + hH + ")"
        })
      }
    },
    eA = function(hU, hT, hQ, hO, hM, hK, hH, hS) {
      if (aO) {
        return hl
      }
      hH = hH || hU;
      hS = hS || hT;
      var hR = bn.length,
        hP = bR,
        hK = hK || 2,
        hM = hM || 0;
      if (hR >= bN) {
        return hl
      }
      if (hR == 0) {
        hP = cM
      } else {
        hP = bP
      }
      hK += hK % 2;
      if (hO < 0 && hP - hK < gx) {
        return hl
      }
      if (hO > 0 && hP + hK > gv) {
        return hl
      }
      var hN = hP + (hO > 0 ? 1 : 0),
        hL = hP + (hK - (hO < 0 ? 1 : 0)) * hO,
        hJ;
      if (hv[hN]["p"] || hv[hL]["p"]) {
        hJ = 2
      } else {
        hJ = hM
      }
      if (hR == 0) {
        bp = hk;
        b0 = hO;
        bX = hJ
      } else {
        if (b0 != hO || bX != hJ) {
          return hl
        }
      }
      bU = hQ;
      bR = hP;
      bP = hP + hK * hO;
      var hI = bX == 1;
      bn[hR] = dB({
        j: bR,
        v: bP,
        k: hI ? hL : hN,
        w: hI ? hN : hL,
        t: hQ,
        s: bX,
        y: hO,
        l: hl,
        e: hl
      }, hU, hT);
      eF();
      if (hH || hS) {
        dy(bn[hR], hH * fw, hS)
      }
      return hk
    },
    ey = function(hK, hJ, hH, hL, hI) {
      hH = hH || hK.y;
      if (hK.y != hH || hK.t == 0 || hK.t == 4 || hK.t == 5 || hJ == 0 || hJ == 1) {
        return hl
      }
      bU = hK.t = hJ;
      dy(hK, hL, hI);
      return hk
    },
    dF = function(hK) {
      var hH = hK.k,
        hL = hK.w,
        hJ = hv[hH]["$p"],
        hI = hv[hL]["$p"];
      hv[hH]["t"] = hv[hH]["y"] = hv[hL]["t"] = hv[hL]["y"] = hl;
      hI.css({
        transform: ah(0, 0) + "rotate(0deg) "
      });
      hJ.css({
        transform: ah(0, 0) + "rotate(0deg) "
      })
    },
    dD = function(hI) {
      var hH = bn[hI];
      if (!hH.e) {
        aO = hl
      } else {
        cM = hH.v
      }
      ak(1, hH.k);
      ak(1, hH.w);
      dF(hH);
      bn.splice(hI, 1);
      bp = bn.length != 0;
      if (bp && hI > 0) {
        bR = bn[hI - 1]["j"];
        bP = bn[hI - 1]["v"]
      }
    },
    dB = function(hL, hI, hH) {
      var hK = hL.w,
        hM = hv[hK]["e"],
        hJ = hv[hK]["f"];
      if (hL.t == 2) {
        if (fK) {
          hI *= hJ * hL.y / hH;
          hH = hJ * hL.y;
          if (hI < -hM / 2) {
            hI = -hM / 2
          }
          if (hI > hM / 2) {
            hI = hM / 2
          }
        } else {
          hH *= hM * hL.y / hI;
          hI = hM * hL.y;
          if (hH < -hJ / 2) {
            hH = -hJ / 2
          }
          if (hH > hJ / 2) {
            hH = hJ / 2
          }
        }
      }
      hL.o = hK % 2 ? 1 : -1;
      hL.d = fK ? -hI : -hM * hL.o;
      hL.c = fK ? -hJ * hL.o : hH;
      hL.A = fK ? 0 : -hM / 2 * hL.o;
      hL.z = fK ? -hJ / 2 * hL.o : 0;
      hL.Q = fK ? -hI : -hM * (hI < 0 ? 1 : -1);
      hL.H = fK ? -hJ * (hH < 0 ? 1 : -1) : hH;
      return hL
    },
    dy = function(hO, hM, hK, hI) {
      hM = hM || hO.Q;
      hK = hK || hO.H;
      var hH = hO.k,
        iD = hO.w,
        hN = hv[hH]["$p"],
        iC = hv[hH]["$m"],
        hL = hv[iD]["$p"],
        ih = hv[iD]["$m"],
        ij = hv[hH]["e"],
        ii = hv[hH]["f"],
        ig = ij / 2,
        ie = ii / 2,
        hJ = b0 * (bX == 1 ? -1 : 1),
        id = hO.d,
        ic = hO.c,
        ib = hO.A,
        iv = hO.z,
        iu = fK ? (hK == hO.u ? hE : (hK < hO.u ? -1 : 1)) : (hM == hO.u ? hE : (hM < hO.u ? -1 : 1));
      hO.u = fK ? hK : hM;
      if (bX != 2) {
        if (fK) {
          var it = hc(hK * hK + (ig + hM) * (ig + hM)),
            ir = hc(hK * hK + (ig - hM) * (ig - hM)),
            iq = hc(ii * ii + (ig + id) * (ig + id)),
            ip = hc(ii * ii + (ig - id) * (ig - id));
          if ((it > iq || ir > ip) && hO.t != 5) {
            if (((it - iq) > e4 || (ir - ip) > e4) && hv[hO.k]["d"] && hO.t == 2) {
              hO.t = 5;
              var io = hK * 2,
                im = hM < 0 ? -ij * 1.5 : ij * 1.5;
              dv(hO, im, io, ex, 2, 0)
            } else {
              if (hM < id) {
                var hP = ig - hM,
                  hQ = hg(hP / ir);
                hM = ig - hi(hQ) * ip;
                hK = he(hQ) * ip * (hK < 0 ? -1 : 1);
                if (hM > id) {
                  if ((ic * hK) > 0) {
                    hK = ic, hM = id
                  } else {
                    hK = -ic, hM = id
                  }
                }
              } else {
                var hP = ig + hM,
                  hQ = hg(hP / it);
                hM = hi(hQ) * iq - ig;
                hK = he(hQ) * iq * (hK < 0 ? -1 : 1);
                if (hM < id) {
                  if ((ic * hK) > 0) {
                    hK = ic, hM = id
                  } else {
                    hK = -ic, hM = id
                  }
                }
              }
            }
          }
          if (((ic < 0 && (hK - ic) < 20) || (ic > 0 && (ic - hK) < 20)) && !hI) {
            if (ic < 0) {
              hK = -ii + 20
            }
            if (ic > 0) {
              hK = ii - 20
            }
          }
        } else {
          var it = hc(hM * hM + (ie + hK) * (ie + hK)),
            ir = hc(hM * hM + (ie - hK) * (ie - hK)),
            iq = hc(ij * ij + (ie + ic) * (ie + ic)),
            ip = hc(ij * ij + (ie - ic) * (ie - ic));
          if ((it > iq || ir > ip) && hO.t != 5) {
            if (((it - iq) > e4 || (ir - ip) > e4) && hv[hO.k]["d"] && hO.t == 2) {
              hO.t = 5;
              var im = hM * 2,
                io = hK < 0 ? -ii * 1.5 : ii * 1.5;
              dv(hO, im, io, ex, 0, 2)
            } else {
              if (hK < ic) {
                var hP = ie - hK,
                  hQ = hg(hP / ir);
                hK = ie - hi(hQ) * ip;
                hM = he(hQ) * ip * (hM < 0 ? -1 : 1);
                if (hK > ic) {
                  if ((id * hM) > 0) {
                    hK = ic, hM = id
                  } else {
                    hK = ic, hM = -id
                  }
                }
              } else {
                var hP = hK + ie,
                  hQ = hg(hP / it);
                hK = hi(hQ) * iq - ie;
                hM = he(hQ) * iq * (hM < 0 ? -1 : 1);
                if (hK < ic) {
                  if ((id * hM) > 0) {
                    hK = ic, hM = id
                  } else {
                    hK = ic, hM = -id
                  }
                }
              }
            }
          }
          if (((id < 0 && (hM - id) < 20) || (id > 0 && (id - hM) < 20)) && !hI) {
            if (id < 0) {
              hM = -ij + 20
            }
            if (id > 0) {
              hM = ij - 20
            }
          }
        }
      }
      if (hI) {
        hO.Q = hM, hO.H = hK
      } else {
        hO.Q += (hM - hO.Q) / 5, hO.H += (hK - hO.H) / 5;
        if (ha(hM - hO.Q) < 0.5 && ha(hK - hO.H) < 0.5) {
          hO.Q = hM, hO.H = hK
        }
        hM = hO.Q, hK = hO.H
      }
      var il = fK ? (hK / ii) * gy : (hM / ij) * gy;
      if (il < -gy) {
        il = -gy
      }
      if (il > gy) {
        il = gy
      }
      if (il < 0) {
        eH(-hi(il / hn) * (fK ? ii : ij))
      }
      if (il > 0) {
        eI(hi(il / hn) * (fK ? ii : ij))
      }
      if (hM == hO.r && hK == hO.q) {
        return
      }
      if (bX == 2) {
        var hJ = b0 * (il < 0 ? 1 : -1),
          ik = gy * b0,
          hW = fK ? "rotateX" : "rotateY",
          hZ = 3000;
        if (hJ < 0) {
          if (bs) {
            hN.css({
              transform: hW + "(" + ((gw + ik + il) * fw) + "deg) " + ah(0, 0),
              opacity: 1
            });
            hL.css({
              transform: hW + "(" + (gy) + "deg) " + ah(hZ, hZ),
              opacity: 1
            })
          } else {
            var hV = -(gy - ha(il)) / 5 * b0;
            hN.css({
              transform: fK ? "scaleY(" + hi(b0 * il / hn) + ") skewX(" + hV + "deg) " + ah(0, 0) : "scaleX(" + hi(b0 * il / hn) + ") skewY(" + hV + "deg) " + ah(0, 0)
            });
            hL.css({
              transform: ah(hZ, hZ)
            })
          }
        } else {
          if (bs) {
            hL.css({
              transform: hW + "(" + ((gw - ik + il) * fw) + "deg) " + ah(0, 0),
              opacity: 1
            });
            hN.css({
              transform: hW + "(" + (gy) + "deg) " + ah(hZ, hZ),
              opacity: 1
            })
          } else {
            var hV = (gy - ha(il)) / 5 * b0;
            hL.css({
              transform: fK ? "scaleY(" + hi(-b0 * il / hn) + ") skewX(" + hV + "deg) " + ah(0, 0) : "scaleX(" + hi(-b0 * il / hn) + ") skewY(" + hV + "deg) " + ah(0, 0)
            });
            hN.css({
              transform: ah(hZ, hZ)
            })
          }
        }
        if (!fF) {
          if (hJ < 0) {
            hv[hH]["$hts"]["css"]("opacity", (1 - ha(hi(il / hn)) + 1 - ha(il / 90)) / 2)
          } else {
            hv[iD]["$hts"]["css"]("opacity", (1 - ha(hi(il / hn)) + 1 - ha(il / 90)) / 2)
          }
        }
        hO.Q = hM, hO.H = hK
      } else {
        if (fK) {
          var hU = id - hM,
            hT = ic - hK,
            hS = id - ib,
            hR = ic - iv,
            h9 = hc(hU * hU + hT * hT),
            hQ = hg(hU / h9) || 0,
            h8 = hc(hS * hS + hR * hR),
            hP = hg(hS / h8);
          if (hT < 0 || (hT == 0 && hJ < 0)) {
            hQ = gU - hQ
          }
          if (hR < 0) {
            hP = gU - hP
          }
          hP = hQ - (hP - hQ);
          var h7 = he(hP) * h8 + hK,
            h6 = hi(hP) * h8 + hM,
            h5 = (h6 - ib) / 2,
            h4 = (h7 - iv) / 2,
            h2 = ib + h5,
            h0 = iv + h4,
            ia = hc(h5 * h5 + h4 * h4);
          if (h4 < 0) {
            ia *= -1
          }
          var hY = hQ * hn;
          var hX = 6;
          hL.css({
            transform: ah(0, ((ie + ia) * hJ)["toFixed"](hX)) + "rotate(" + (hY) + "deg) "
          });
          ih.css({
            transform: ah(-h2.toFixed(hX), h0.toFixed(hX)) + "rotate(" + (hY) + "deg)"
          });
          hN.css({
            transform: ah(-(hi(-hQ) * hJ)["toFixed"](hX), ((-ie - ia + 1 * he(-hQ)) * hJ)["toFixed"](hX)) + "rotate(" + (-hY) + "deg) "
          });
          iC.css({
            transform: ah((-h2)["toFixed"](hX), (h0 - 1 * hJ)["toFixed"](hX)) + "rotate(" + (hY) + "deg)"
          });
          var iB = ha(he(hQ) * ie) - ia * hJ,
            iA = hi(-hQ) * ig + iB,
            iz = hi(hQ) * ig + iB,
            iy = (iA + iz) / 2,
            ix = 1;
          iB = iA > iz ? iA : iz;
          hO.n = iB;
          if (!fF) {
            iB /= ii;
            iy /= ii;
            var iw = iy < 0.05 ? 0.05 : iy;
            if (iy < 0.2) {
              iy = iB
            }
            if (iy < 0.2) {
              ix = 5 * iy
            }
            if (iy > 0.9) {
              ix = 1 - (iy - 0.9) * 10
            }
            var h3 = iB;
            if (h3 > 0.6) {
              if (h3 > 0.8) {
                h3 = 0.6 - 1 * (h3 - 0.8)
              } else {
                h3 = 0.6 + hi(((h3 - 0.6) / 0.2) * gU) * 0.1
              }
            }
            var h1 = 0.5 + ix / 2;
            hv[iD]["$fsA"]["css"]({
              transform: ah((-h2)["toFixed"](5), (h0)["toFixed"](5)) + "rotate(" + (hY + 90) + "deg) scaleX(" + (iw * 6) + ")",
              opacity: h1.toFixed(5)
            });
            hv[iD]["$fsB"]["css"]({
              transform: ah((-h2)["toFixed"](5), (h0)["toFixed"](5)) + "rotate(" + (hY + 90) + "deg) scaleX(" + (iB * 3) + ")",
              opacity: ix.toFixed(5)
            });
            hv[iD]["$fts"]["css"]({
              transform: "rotate(" + (-hY + 90) + "deg) " + ah((-ia * hJ)["toFixed"](5), 0) + "scaleX(" + (h3 * 4) + ")",
              opacity: (ix * fz)["toFixed"](5)
            })
          }
          hO.r = hM, hO.q = hK
        } else {
          var hU = id - hM,
            hT = ic - hK,
            hS = id - ib,
            hR = ic - iv,
            h9 = hc(hU * hU + hT * hT),
            hQ = hg(hT / h9) || 0,
            h8 = hc(hS * hS + hR * hR),
            hP = hg(hR / h8);
          if (hU < 0 || (hU == 0 && hJ < 0)) {
            hQ = gU - hQ
          }
          if (hS < 0) {
            hP = gU - hP
          }
          hP = hQ - (hP - hQ);
          var h6 = he(hP) * h8 + hM,
            h7 = hi(hP) * h8 + hK,
            h5 = (h6 - ib) / 2,
            h4 = (h7 - iv) / 2,
            h2 = ib + h5,
            h0 = iv + h4,
            ia = hc(h5 * h5 + h4 * h4);
          if (h5 < 0) {
            ia *= -1
          }
          var hY = hQ * hn;
          var hX = 6;
          hL.css({
            transform: ah(((ig + ia) * hJ)["toFixed"](hX), 0) + "rotate(" + (hY) + "deg) "
          });
          ih.css({
            transform: ah(h2.toFixed(hX), h0.toFixed(hX)) + "rotate(" + (hY) + "deg)"
          });
          hN.css({
            transform: ah(((-ig - ia + 1 * he(-hQ)) * hJ)["toFixed"](hX), (hi(-hQ) * hJ)["toFixed"](hX)) + "rotate(" + (-hY) + "deg) "
          });
          iC.css({
            transform: ah((h2 - 1 * hJ)["toFixed"](hX), (h0)["toFixed"](hX)) + "rotate(" + (hY) + "deg)"
          });
          var iB = ha(he(hQ) * ig) - ia * hJ,
            iA = hi(-hQ) * ie + iB,
            iz = hi(hQ) * ie + iB,
            iy = (iA + iz) / 2,
            ix = 1;
          iB = iA > iz ? iA : iz;
          hO.n = iB;
          if (!fF) {
            iB /= ij;
            iy /= ij;
            var iw = iy < 0.05 ? 0.05 : iy;
            if (iy < 0.2) {
              iy = iB
            }
            if (iy < 0.2) {
              ix = 5 * iy
            }
            if (iy > 0.9) {
              ix = 1 - (iy - 0.9) * 10
            }
            var h3 = iB;
            if (h3 > 0.6) {
              if (h3 > 0.8) {
                h3 = 0.6 - 1 * (h3 - 0.8)
              } else {
                h3 = 0.6 + hi(((h3 - 0.6) / 0.2) * gU) * 0.1
              }
            }
            var h1 = 0.5 + ix / 2;
            hv[iD]["$fsA"]["css"]({
              transform: ah((h2)["toFixed"](5), (h0)["toFixed"](5)) + "rotate(" + (hY) + "deg) scaleX(" + (iw * 6) + ")",
              opacity: h1.toFixed(5)
            });
            hv[iD]["$fsB"]["css"]({
              transform: ah((h2)["toFixed"](5), (h0)["toFixed"](5)) + "rotate(" + (hY) + "deg) scaleX(" + (iB * 3) + ")",
              opacity: ix.toFixed(5)
            });
            hv[iD]["$fts"]["css"]({
              transform: "rotate(" + (-hY) + "deg) " + ah((-ia * hJ)["toFixed"](5), 0) + "scaleX(" + (h3 * 4) + ")",
              opacity: (ix * fz)["toFixed"](5)
            })
          }
          hO.r = hM, hO.q = hK
        }
      }
      return iu
    },
    dv = function(hN, hL, hM, hK, hJ, hI, hH) {
      hN.i = hN.Q;
      hN.h = hN.H;
      hN.b = hL;
      hN.a = hM;
      hN.x = hK;
      hN.g = hJ;
      hN.f = hI;
      hN.m = d2()["getTime"]();
      hN.p = hH
    },
    ds = function(hH) {
      var hL = d2()["getTime"]() - hH.m,
        hN = hH.x,
        hK = hl;
      if (hL >= hN) {
        hK = hk;
        hL = hN
      }
      var hJ = hL / hN,
        hP = hH.b - hH.i,
        hO = hH.a - hH.h,
        hI = hH.i + d3(hH.g, hJ, hP, hH.p),
        hM = hH.h + d3(hH.f, hJ, hO, hH.p);
      return {
        x: hI,
        y: hM,
        end: hK
      }
    },
    d3 = function(hH, hJ, hK, hI) {
      switch (hH) {
        case 0:
          return hK * hJ;
        case 1:
          return hi(gU * hJ / 2) * hK;
        case 2:
          return (1 - he(gU * hJ / 2)) * hK;
        case 3:
          return (1 - he(gU * hJ)) / 2 * hK;
        case 4:
          return hi(2 * gU * hJ) * hI;
        case 5:
          return hi(gU * hJ) * hI;
        case 6:
          return he(2 * gU * hJ) * hI;
        case 7:
          return he(gU * hJ) * hI
      }
    },
    d2 = function() {
      return new Date()
    },
    d1, d0 = hl,
    dY = function() {
      if (d1) {
        raf(dY)
      }
      if (aW.length > 0) {
        aR()
      }
      if (bp) {
        var hI;
        ea = ei, d6 = ec;
        for (var hH = 0; hH < bn.length; hH++) {
          hI = bn[hH];
          switch (hI.t) {
            case 1:
              break;
            case 2:
            case 3:
              aN = dy(hI, bM * fw, bL);
              break;
            case 0:
            case 4:
              var hJ = ds(hI);
              dy(hI, hJ.x, hJ.y, hk);
              if (hJ.end) {
                dD(hH);
                eF();
                if (g2 && aQ) {
                  dd(bn[bn.length - 1]);
                  c7()
                }
                if (!bv) {
                  df()
                }
                hH--
              }
              break;
            case 5:
              var hJ = ds(hI);
              dy(hI, hJ.x, hJ.y, hk);
              if (hJ.end) {
                dD(hH);
                eF();
                hH--
              }
              break
          }
        }
        if (bp) {
          if (hd && !e2) {
            eC(ea, d6)
          }
          eH(fa);
          eI(ef);
          eG()
        }
      }
      if (f3) {
        ej()
      }
      J()
    },
    dW = false,
    dU = function(hH) {
      if (ew) {
        af(hH)
      }
    },
    dS = function(hH) {
      cS(hH, true)
    },
    dP = function(hH) {
      cQ(hH, true)
    },
    dM = function(hH) {
      cO(hH, true)
    },
    cS = function(hK, hI) {
      dW = hI || false;
      d0 = hl;
      if (aQ || bK || !dQ) {
        return
      }
      if (hG(hK.target)["hasClass"]("pf-hotspot") || hG(hK.target)["hasClass"]("pf-activecontent") || hG(hK.target)["parents"](".pf-activecontent")["length"]) {
        return
      }
      bD(hK);
      if (dW && eL) {
        c5(hK, c2);
        if (b2) {
          b2 = hl;
          af(hK);
          return;
          if (!bZ) {
            bZ = hk;
            bc();
            bg = ab
          }
        }
        if (bZ) {
          af(hK);
          return
        }
      }
      var hJ = br(bM, bL, aT);
      if (hJ && bw()) {
        c7();
        af(hK);
        switch (hJ) {
          case "TL":
          case "BL":
            if (aT || bJ) {
              if (ey(bn[bn.length - 1], 2, -1)) {
                aT = bJ = hl;
                aQ = hk
              }
            } else {
              if (eA(bM, bL, 2, -1, 0)) {
                aQ = hk
              }
            }
            break;
          case "TR":
          case "BR":
            if (aT || bJ) {
              if (ey(bn[bn.length - 1], 2, 1)) {
                aT = bJ = hl;
                aQ = hk
              }
            } else {
              if (eA(bM, bL, 2, 1, 0)) {
                aQ = hk
              }
            }
            break
        }
      } else {
        hJ = aK(bM, bL);
        if (hJ && bw()) {
          c7();
          af(hK);
          if (d4) {
            if (!fI && hJ == "IL") {
              hJ = "IR"
            }
            if (fI && hJ == "IR") {
              hJ = "IL"
            }
          }
          switch (hJ) {
            case "OL":
              if (eA(bM, bL, 2, -1, 1)) {
                aQ = hk
              }
              break;
            case "IR":
              if (eA(fK ? (bM < 0 ? -aM : aM) : -gR, fK ? -gR : (bL < 0 ? -aL : aL), 2, -1, d4 ? 1 : 0)) {
                aQ = hk
              }
              break;
            case "OR":
              if (eA(bM, bL, 2, 1, 1)) {
                aQ = hk
              }
              break;
            case "IL":
              if (eA(fK ? (bM < 0 ? -hx : hx) : gR, fK ? gR : (bL < 0 ? -hw : hw), 2, 1, d4 ? 1 : 0)) {
                aQ = hk
              }
              break
          }
        } else {
          if (N && aH(hK)) {
            af(hK);
            y = hk;
            d0 = hl;
            var hH = bB(hK);
            E(hH.x, hH.y)
          } else {
            return hl
          }
        }
      }
    },
    cQ = function(hK, hI) {
      dW = hI || false;
      d0 = hk;
      if (bK || !dQ) {
        return
      }
      if (aQ || aT || y || bZ) {
        af(hK)
      }
      if (dW && bZ) {
        bI();
        bF(cr, cp);
        af(hK);
        return
      }
      bD(hK);
      if (y) {
        var hH = bB(hK);
        G(hH.x, hH.y);
        return
      }
      var hJ = br(bM, bL, aT);
      if (aT && !dW) {
        if (!hJ) {
          dd(bn[bn.length - 1])
        }
      } else {
        if (aQ) {} else {
          if (!dW && !N && f9) {
            if (hJ) {
              switch (hJ) {
                case "TL":
                case "BL":
                  if (eA(fK ? (bM < 0 ? -aM : aM) : bM, fK ? bL : (bL < 0 ? -aL : aL), 3, -1, 0, hE, bM, bL)) {
                    aT = hk
                  }
                  break;
                case "TR":
                case "BR":
                  if (eA(fK ? (bM < 0 ? -hx : hx) : bM, fK ? bL : (bL < 0 ? -hw : hw), 3, 1, 0, hE, bM, bL)) {
                    aT = hk
                  }
                  break
              }
            }
          }
        }
      }
    },
    cO = function(hI, hH) {
      dW = hH || false;
      if (!dQ) {
        return
      }
      if (hG(hI.target)["hasClass"]("pf-hotspot")) {
        return
      }
      bD(hI);
      bz = null;
      if (dW && eL) {
        c5(hI, b6);
        if (b2 && bZ) {
          b2 = hl;
          ba()
        }
      }
      if (aQ || aT) {
        af(hI);
        dd(bn[bn.length - 1]);
        bv = hl;
        if (!dW) {
          df()
        }
      } else {
        if (y) {
          af(hI);
          y = hl;
          if (!aH(hI)) {
            return hk
          }
          if (!d0 && aJ(bM, bL) && eP) {
            cI(hI, false)
          }
        } else {
          if (!aH(hI)) {
            return hk
          }
          if (!d0 && aJ(bM, bL) && eP) {
            cI(hI, true)
          }
        }
      }
    },
    cL = 0,
    cI = function(hJ, hH) {
      var hK = d2();
      if (hK - cL < 300) {
        if (hH) {
          var hI = bB(hJ);
          D(bM, bL, hI.x, hI.y);
          aj.zoomIn()
        } else {
          aj.zoomOut()
        }
        cL = 0
      }
      cL = hK
    },
    cF = function(hI) {
      if (document.activeElement["tagName"]["toLowerCase"]() != "body") {
        return
      }
      if (!eK || hI.metaKey || hI.altKey || hI.ctrlKey || hI.shiftKey) {
        return
      }
      var hH = hI.keyCode;
      switch (hI.keyCode) {
        case 37:
          af(hI);
          aj.gotoPrevPage(hk);
          break;
        case 39:
          af(hI);
          aj.gotoNextPage(hk);
          break;
        case 40:
          af(hI);
          aj.gotoLastPage(hk);
          break;
        case 38:
          af(hI);
          aj.gotoFirstPage(hk);
          break;
        case 90:
          af(hI);
          aj.toggleZoom();
          break;
        case 84:
          af(hI);
          aj.showThumbnails();
          break;
        case 65:
          af(hI);
          aj.toggleAutoFlip();
          break
      }
    },
    dg = function(hH) {
      bz = null;
      c7();
      bG();
      dumpTouches("Cancel")
    },
    df = function() {
      cb.trigger(gY.b)
    },
    de = function(hL, hJ, hH) {
      var hN = hl,
        hM = fK ? -0.5 : hL,
        hK = fK ? hL * 2 : 1;
      if (eA(hM * hA, hK * hz / 2, 0, hL, hJ, hH, hM * hA * 0.97, hK * hz / 2 * 0.97)) {
        var hO = bn[bn.length - 1];
        hO.e = hk;
        var hI = hO.s == 1 ? 1 : -1;
        if (fK) {
          dv(hO, hO.d, hI * hO.c, ex, 5, hO.s == 2 ? 0 : 3, -hA / 8 - ((gA() - 0.5) * hA / 16))
        } else {
          dv(hO, hI * hO.d, hO.c, ex, hO.s == 2 ? 0 : 3, 5, -hz / 8 + ((gA() - 0.5) * hz / 16))
        }
        hN = hk
      }
      return hN
    },
    dd = function(hH, hJ) {
      if (hJ && hJ != hH.y) {
        return
      }
      var hO = hH.o * (hH.s == 1 ? -1 : 1);
      if (ey(hH, 4)) {
        hH.e = aN && aQ ? aN == hO : (hO * (fK ? bL : bM)) > 0;
        var hI = br(bM, bL, aT || aQ),
          hN = aK(bM, bL);
        if (!d0 && (hI || hN)) {
          hH.e = fq
        }
        aQ = aT = hl;
        var hK = hH.d * (fK ? 1 : (hH.e ? -1 : 1) * hH.o * hO),
          hL = hH.c * (fK ? (hH.e ? -1 : 1) * hH.o * hO : 1),
          hR = fK ? cD : cG,
          hQ = ag(hK - hH.Q, hL - hH.H) / hR,
          hP = hH.n / hR,
          hM = 2;
        if (hP > hQ) {
          hQ = hP, hM = 1
        }
        dv(hH, hK, hL, ex * hQ, fK ? hM : 0, fK ? 0 : hM);
        aO = !hH.e
      }
    },
    db = function() {
      aM = hv[cM]["e"] / fy || 0;
      aL = hv[cM]["f"] / fA || 0;
      hx = hv[cM + 1]["e"] / fy || 0;
      hw = hv[cM + 1]["f"] / fA || 0
    },
    c9, c7 = function() {
      c9 = [];
      bW = []
    },
    c5 = function(hK, hH) {
      hK = hK.originalEvent["changedTouches"];
      for (var hI = 0, hJ; hI < hK.length; hI++) {
        hJ = hK[hI];
        hH(hJ, hJ.identifier)
      }
      if (eL) {
        bT()
      }
    },
    c2 = function(hH, hI) {
      c9.splice(0, 0, {
        b: hH,
        a: hI
      })
    },
    cZ = function(hH, hI) {
      c9[b4(hI)]["b"] = hH
    },
    b6 = function(hH, hI) {
      c9.splice(b4(hI), 1)
    },
    b4 = function(hI) {
      for (var hH = 0; hH < c9.length; hH++) {
        if (c9[hH]["a"] == hI) {
          return hH
        }
      }
      return -1
    },
    b2, bZ, bW, bT = function() {
      if (c9.length > 1) {
        if (bW.length == 0) {
          bW[0] = c9[0]["a"];
          bW[1] = c9[1]["a"];
          b2 = hk
        } else {
          if (b4(bW[0]) == -1) {
            bW[0] = cu(bW[1]);
            b2 = hk
          }
          if (b4(bW[1]) == -1) {
            bW[1] = cu(bW[0]);
            b2 = hk
          }
        }
      } else {
        bW = [];
        b2 = hl;
        bG()
      }
    },
    cu = function(hI) {
      for (var hH = 0; hH < c9.length; hH++) {
        var hJ = c9[hH]["a"];
        if (hJ != hI) {
          return hJ
        }
      }
      return -1
    },
    ct, cs, cr, cp, cn, cl, cj, cg = 0,
    cd = 0,
    bk, bi, bg, be = function() {
      var hI = c9[b4(bW[0])]["b"],
        hH = c9[b4(bW[1])]["b"];
      cr = (hI.pageX + hH.pageX) / 2 - di.offset()["left"];
      cp = (hI.pageY + hH.pageY) / 2 - di.offset()["top"];
      return ag(hI.pageX - hH.pageX, hI.pageY - hH.pageY)
    },
    bc = function() {
      cg = Y * ab;
      cd = X * ab;
      Y = W = X = V = 0;
      ct = be();
      cj = 1;
      cs = ab;
      cn = cr - cg;
      cl = cp - cd;
      var hH = cy + M * cs;
      bk = (((cr + di.offset()["left"]) - dh.offset()["left"]) / hH - cG / 2) / (hH);
      bi = (((cp + di.offset()["top"]) - dh.offset()["top"]) / hH - cD / 2) / (hH)
    },
    ba = function() {
      ct = be() / cj
    },
    bI = function() {
      cj = be() / ct;
      bg = bH()
    },
    bH = function() {
      var hI = cy + M * cs,
        hH = ((hI * cj) - cy) / M;
      return hH
    },
    bG = function() {
      if (bZ) {
        var hH = N;
        if (cs > ab) {
          N = hl
        } else {
          N = hk
        }
        bZ = hl;
        bW = [];
        Y = cg / ab;
        X = cd / ab;
        var hI = F(Y, X);
        W = hI.x;
        V = hI.y;
        cg = cd = 0;
        I();
        if (hH != N) {
          ak(N ? 9 : 10, cM)
        }
      }
    },
    bF = function(hI, hH) {
      cg = hI - cn + bk * M * (cs - ab);
      cd = hH - cl + bi * M * (cs - ab)
    },
    bD = function(hJ) {
      if (g2) {
        hJ = bu(hJ)
      }
      var hK = cy + M * ab,
        hI = (hJ.pageX - dh.offset()["left"]) / hK - cG / 2 - cB,
        hH = (hJ.pageY - dh.offset()["top"]) / hK - cD / 2 - cz;
      if (!isNaN(hI)) {
        bM = hI, bL = hH
      }
    },
    bB = function(hJ) {
      if (g2) {
        hJ = bu(hJ)
      }
      var hI = hJ.pageX - di.offset()["left"],
        hH = hJ.pageY - di.offset()["top"];
      return {
        x: hI,
        y: hH
      }
    },
    bz, bx, bu = function(hJ) {
      if (hJ.originalEvent == hE) {
        return 0
      }
      var hK = hJ.originalEvent["changedTouches"] || [hJ];
      if (bz) {
        var hH = hK.length;
        for (var hI = 0; hI < hH; hI++) {
          if (hK[hI]["identifier"] == bz) {
            return hK[hI]
          }
        }
        hK = hJ.originalEvent["touches"];
        hH = hK.length;
        for (var hI = 0; hI < hH; hI++) {
          if (hK[hI]["identifier"] == bz) {
            return hK[hI]
          }
        }
        return bx
      }
      bz = hK[0]["identifier"];
      bx = hK[0];
      return bx
    },
    br = function(hL, hK, hJ) {
      var hI = "",
        hH = fr * (hJ ? 1.2 : 1);
      if (fK) {
        if (hK > -aL && hK < hw) {
          if (hK < -aL + hH) {
            if (hL > -aM && hL < -aM + hH) {
              hI = "BL"
            } else {
              if (hL < aM && hL > aM - hH) {
                hI = "TL"
              }
            }
          } else {
            if (hK > hw - hH) {
              if (hL > -hx && hL < -hx + hH) {
                hI = "BR"
              } else {
                if (hL < hx && hL > hx - hH) {
                  hI = "TR"
                }
              }
            }
          }
        }
      } else {
        if (hL > -aM && hL < hx) {
          if (hL < -aM + hH) {
            if (hK > -aL && hK < -aL + hH) {
              hI = "TL"
            } else {
              if (hK < aL && hK > aL - hH) {
                hI = "BL"
              }
            }
          } else {
            if (hL > hx - hH) {
              if (hK > -hw && hK < -hw + hH) {
                hI = "TR"
              } else {
                if (hK < hw && hK > hw - hH) {
                  hI = "BR"
                }
              }
            }
          }
        }
      }
      return hI
    },
    aK = function(hJ, hI) {
      var hH = "";
      if (fK) {
        if (hI > -aL && hI < hw) {
          if (hI < -aL + eB) {
            if (ha(hJ) < aM) {
              hH = "OL"
            }
          } else {
            if (hI > hw - eB) {
              if (ha(hJ) < hx) {
                hH = "OR"
              }
            } else {
              if (ha(hI) < ez) {
                hH = hI < 0 ? "IL" : "IR"
              }
            }
          }
        }
      } else {
        if (hJ > -aM && hJ < hx) {
          if (hJ < -aM + eB) {
            if (ha(hI) < aL) {
              hH = "OL"
            }
          } else {
            if (hJ > hx - eB) {
              if (ha(hI) < hw) {
                hH = "OR"
              }
            } else {
              if (ha(hJ) < ez) {
                hH = hJ < 0 ? "IL" : "IR"
              }
            }
          }
        }
      }
      return hH
    },
    aJ = function(hK, hI) {
      if (fK) {
        var hH = aI(hI, aM, hx);
        if (hI > -aL && hI < hw && hK > -hH && hK < hH) {
          return hk
        }
      } else {
        var hJ = aI(hK, aL, hw);
        if (hK > -aM && hK < hx && hI > -hJ && hI < hJ) {
          return hk
        }
      }
      return hl
    },
    aI = function(hH, hJ, hI) {
      return hH < 0 ? hJ : hI
    },
    aH = function(hI) {
      var hH = hG(hI.target);
      return !(hH.is("a") || hH.is("input") || hH.is("textarea") || hH.is("button") || hH.hasClass("hotspot"))
    },
    aG = function(hH) {
      return a6("pf-page-container pf-" + hm[hH % 2] + "-side" + (hv[hH]["k"] ? " pf-outer" : "") + (hD ? " " + hD : ""), "page" + hH, a6("pf-page-content", "page" + hH + "content"))
    },
    aF = function(hP, hO, hN, hM, hL, hK, hJ, hI, hH) {
      return {
        position: hP,
        width: hO ? hO + "px" : hE,
        height: hN ? hN + "px" : hE,
        top: hM ? hM + "px" : hE,
        left: hL ? hL + "px" : hE,
        right: hK ? hK + "px" : hE,
        overflow: hJ,
        "transform-origin": hI,
        "z-index": hH
      }
    },
    a6 = function(hJ, hI, hH) {
      return "<div" + (hI ? ' id="' + hI + '"' : "") + (hJ ? ' class="' + hJ + '"' : "") + ">" + (hH ? hH : "") + "</div>"
    },
    a5 = function(hH) {
      return hG("#page" + hH)
    },
    a4 = function(hH) {
      return hG("#page" + hH + "content")
    },
    a3 = function(hH) {
      return hG("#page" + hH + "emboss")
    },
    a1 = function(hH) {
      return hG("#page" + hH + "mask")
    },
    aZ = function(hH) {
      return hG("#page" + hH + "flipshadowcontainer")
    },
    aX = function(hH) {
      return hG("#page" + hH + "flipshadowA")
    },
    aV = function(hH) {
      return hG("#page" + hH + "flipshadowB")
    },
    aS = function(hH) {
      return hG("#page" + hH + "fliptopshadow")
    },
    aP = function(hH) {
      return hG("#page" + hH + "hardtopshadow")
    },
    ah = function(hH, hI) {
      return bs ? "translate3d(" + hH + "px," + hI + "px,0) " : "translate(" + hH + "px," + hI + "px) "
    },
    ag = function(hK, hI, hJ) {
      var hH = hc(hK * hK + hI * hI);
      if (hJ) {
        hH *= hK > 0 ? -1 : 1
      }
      return hH
    },
    af = function(hH) {
      return hH.preventDefault()
    },
    ae = function(hH, hI) {
      if (dj == hE) {
        hD = hI;
        dj = this;
        bs = "WebKitCSSMatrix" in hF || "MozPerspective" in document.body["style"];
        fV(hH);
        if (dN) {
          aw(1)
        }
        fR();
        fL();
        if (eb) {
          ad()
        } else {
          dj = hE;
          return []
        }
      } else {
        return dj
      }
      return this
    },
    ad = function() {
      hq = dj.html();
      if (ga) {
        dj.load(ga, "GET", ac)
      } else {
        ac()
      }
    },
    ac = function() {
      dj.after("<div id='temppageflip' style='display: none;'></div>");
      var hJ = hG("#temppageflip");
      hJ.html(dj.html());
      var hH = hJ.children();
      if (hH.length == 0) {
        return []
      }
      hp = v(hH);
      cM = gz = (gz > gv ? gv : (gz < gx ? gx : gz));
      cM -= cM % 2;
      if (fI) {
        cM = cJ - cM - 1
      }
      var hI = (hD ? " " + hD : "");
      dj.html(a6("pageflip-container" + hI, "pf-stage", a6("pf-book-container" + hI, "pf-book", a6("pf-book-offset" + hI, "pf-bookoffs", a6("pf-book-content" + hI, "pf-bookc", fE ? a6((hD ? hD : hE), "pf-dropshadow") : hE))) + a6(hD ? hD : hE, "pf-controls")))["css"]("visibility", "visible");
      di = hG("#pf-stage");
      dh = hG("#pf-book");
      ce = hG("#pf-bookoffs");
      ch = hG("#pf-bookc");
      cc = fE ? hG("#pf-dropshadow") : hE;
      cb = hG(document);
      di.css({
        position: "relative",
        margin: gp,
        "-webkit-perspective-origin-x": "50%",
        "-webkit-perspective-origin-y": "50%"
      });
      if (gk) {
        di.css({
          width: "100%",
          height: "100%"
        })
      } else {
        if (hh == hE) {
          di.css({
            width: gm ? "100%" : cG + (cG > gZ ? g3 + g1 : gS + go)
          })
        } else {
          di.css({
            width: hh
          })
        }
        if (hf == hE) {
          di.css({
            height: gm ? "100%" : cD + (cG > gZ ? g6 + g5 : gV + gT)
          })
        } else {
          di.css({
            height: hf
          })
        }
        di.css({
          overflow: "hidden"
        })
      }
      an();
      aq();
      dh.css({
        position: "relative",
        top: 0,
        left: 0
      });
      ch.css({
        "transform-style": "preserve-3d",
        opacity: 1
      });
      ce.css({
        position: "absolute",
        top: 0,
        left: 0,
        "z-index": 10
      });
      if (fE) {
        cc.css({
          position: "absolute",
          top: 0,
          left: 0,
          "z-index": 1,
          "transform-origin": fK ? "50% 0%" : "0% 50%",
          opacity: fB
        })
      }
      aB(hk);
      if (cY) {
        d4 = O()
      }
      if (d4) {
        fU()
      }
      fH(hH);
      if (!cY) {
        hJ.remove()
      }
      if (f3) {
        e8()
      }
      if (d5) {
        hG(dj)["css"]({
          "user-select": "none"
        })
      }
      k(hE, hk);
      i = cM;
      u(hp);
      x();
      eF();
      ce.bind(gY.a, cS);
      di.bind(gY.a, dU);
      cb.bind(gY.b, cQ)["bind"](gY.c, cO);
      cb.bind("keydown", cF);
      if (g2) {
        c7();
        cb.bind("touchcancel", dg);
        ce.bind(g0.a, dS);
        di.bind(g0.a, dU);
        cb.bind(g0.b, dP)["bind"](g0.c, dM)
      }
      if (eo) {
        hG(hF)["bind"]("hashchange", k)
      }
      hG(hF)["bind"]("resize", aB);
      if (gk || gm) {
        aB()
      }
      if (gt) {
        aj.startAutoFlip(hl)
      }
      hF.raf = (function() {
        return hF.requestAnimationFrame || hF.webkitRequestAnimationFrame || hF.mozRequestAnimationFrame || function(hK) {
            hF.setTimeout(hK, gR / 6)
          }
      })();
      d1 = hk;
      dY();
      return dj
    },
    aE, aD = function(hH) {
      if (aE || !dj) {
        return
      }
      aE = hk;
      ch.css("opacity", 0);
      if (ca) {
        ca.css("opacity", 0);
        ca.unbind()
      }
      if (f3) {
        en()
      }
      hF.setTimeout(function() {
        d1 = hl
      }, 900);
      hF.setTimeout(function() {
        bp = hl;
        b5();
        hD = hE;
        dj.empty();
        dj.html(hq)["attr"]("style", null);
        dj = hE;
        gn = 85;
        cb.unbind(gY.b, cQ)["unbind"](gY.c, cO)["unbind"]("webkitfullscreenchange mozfullscreenchange msfullscreenchange fullscreenchange", aY);
        cb.unbind("keydown", cF);
        if (g2) {
          cb.unbind("touchcancel", dg);
          cb.unbind(g0.b, dP)["unbind"](g0.c, dM)
        }
        hG(hF)["unbind"]("resize", aB);
        ce.unbind();
        aE = hl;
        if (hH) {
          hH()
        }
      }, 1000);
      if (dN) {
        au()
      }
    },
    aC = function() {},
    aB = function(hI) {
      hI = hI === hk;
      if (cY && !hI) {
        aB(hk);
        var hH = d4;
        d4 = O();
        if (hH != d4) {
          if (d4) {
            fU();
            if (cM > 0 && !fI) {
              cM = cM * 2 - 2
            } else {
              cM = cM * 2
            }
          } else {
            fT();
            if (cM > 0 && !fI) {
              cM = Math.floor(cM / 4) * 2 + 2
            } else {
              cM = Math.floor(cM / 4) * 2
            }
          }
          var hJ = hG("#temppageflip");
          var hL = hJ.children();
          fH(hL);
          fP();
          fJ();
          if (f3) {
            e8()
          }
        }
      }
      if (gk) {
        hG(dj)["css"]({
          width: hF.innerWidth,
          height: hF.innerHeight
        })
      }
      if (gk || gm) {
        var hV = ge;
        if (hV && bY) {
          hV = hl;
          di.css({
            height: "100%"
          })
        }
        hh = di.width();
        hf = di.height();
        aq();
        if (gH) {
          var hU = hF.innerHeight - gG;
          if (hf > hU) {
            hf = hU;
            hV = hl;
            di.css({
              height: hU
            })
          }
        }
        var hT = hh - az - ax,
          hS = hV ? cD : hf - av - at,
          hR = gF ? hy : cG,
          hP = gF ? hj : cD,
          hQ = hT / hR,
          hO = hS / hP;
        if (gH) {
          var hN = hQ < hO ? hQ : hO;
          var hM = cD * hN + av + at;
          if (hM > hU) {
            hV = hl;
            hS = hf - av - at;
            hO = hS / hP;
            di.css({
              height: hU
            })
          }
        }
        if (gD) {
          if (fK ? hS >= gB : hT >= gB) {
            hy = hA = gE(hT / fA);
            hj = hz = gE(hS / fy);
            cy = 1
          } else {
            if (fK) {
              hj = hz = gB / 2;
              cy = hS / gB;
              hy = hA = hT / cy
            } else {
              hy = hA = gB / 2;
              cy = hT / gB;
              hj = hz = hS / cy
            }
          }
          fP();
          if (!hI) {
            an();
            for (var hK = 0; hK < hv.length; hK++) {
              hv[hK]["e"] = hA;
              hv[hK]["f"] = hz;
              hv[hK]["m"] = hv[hK]["q"] ? cv : cw
            }
            fJ()
          }
        } else {
          cy = gi ? (hQ > hO ? hQ : hO) : (hQ < hO ? hQ : hO);
          if (cy > 1 && !gg) {
            cy = 1
          }
        }
        R = gE((cG * cy - cG) / 2 - (cG * cy - hT) / 2);
        if (hV) {
          hS = cD * (cy + M * ab);
          di.css({
            height: hS + (av + at)
          });
          Q = g8((cD * (cy + M * ab) - cD) / 2)
        } else {
          Q = g8((cD * cy - cD) / 2 - (cD * cy - hS) / 2)
        }
        if (!hI) {
          w(hT, hS);
          P();
          if (f3) {
            dx(hk)
          }
          q(hh)
        }
      }
    },
    az, ax, av, at, aq = function() {
      var hH = hh <= gZ;
      az = hH ? gS : g3, ax = hH ? go : g1, av = hH ? gV : g6, at = hH ? gT : g5;
      dh.css({
        "margin-top": av,
        "margin-left": az,
        "margin-bottom": at,
        "margin-right": ax
      })
    },
    an = function() {
      dh.css({
        width: cG,
        height: cD
      });
      ce.css({
        width: cG,
        height: cD
      });
      if (fE) {
        cc.css({
          width: cG,
          height: cD
        })
      }
    },
    R, Q, P = function() {
      var hJ = cy + M * ab,
        hI = R + Y * ab + cg,
        hH = Q + X * ab + cd;
      dh.css({
        transform: ah(hI, hH) + "scale(" + hJ + "," + hJ + ")"
      })
    },
    O = function() {
      var hP = hh - az - ax,
        hO = hf - av - at,
        hN = hP / cG,
        hM = hO / cD,
        hJ = hN > hM ? hM : hN,
        hL = hP / hy,
        hK = hO / hj,
        hI = hL > hK ? hK : hL;
      if (hI > 1) {
        hI = 1
      }
      if (hJ > 1) {
        hJ = 1
      }
      var hH = fK ? ((hO - hj * hI) / 2) / (hj * hI) : ((hP - hy * hI) / 2) / (hy * hI);
      if (hH < 0) {
        hH = 0
      }
      if (hJ < hI && hH <= 0.25) {
        return hk
      }
      return hl
    },
    N, M, ab, aa, Z, Y, X, W, V, U, T, S, B, A, z, y, x = function() {
      M = ab = aa = Z = Y = X = W = V = U = T = S = B = A = z = 0;
      N = y = hl
    },
    w = function(hL, hK) {
      var hI = cG,
        hH = cD;
      if (d4) {
        if (fK) {
          hH /= 2
        } else {
          hI /= 2
        }
      }
      aa = g8((hI - hL) / 2);
      Z = g8((hH - hK) / 2);
      if (aa < 0) {
        aa = 0
      }
      if (Z < 0) {
        Z = 0
      }
      M = (cy < 1 ? 1 - cy : 0);
      if (M == 0) {
        x()
      } else {
        if (N) {
          var hJ = F(W, V);
          Y = W = hJ.x;
          X = V = hJ.y
        }
      }
      I()
    },
    L = function() {
      if (!N && cy < 1) {
        N = hk;
        s(hk);
        e7(hk);
        ak(9, cM)
      }
    },
    K = function() {
      if (N && cy < 1) {
        N = hl;
        ak(10, cM)
      }
    },
    J = function() {
      if (bZ) {
        ab += (bg - ab) / 5;
        if (ha(bg - ab) < 0.01) {
          ab = bg
        }
        P();
        return
      }
      if (N) {
        if (ab != 1) {
          ab += (1 - ab) / 5;
          if (ha(1 - ab) < 0.01) {
            ab = 1
          }
          P();
          if (ge) {
            hG(hF)["trigger"]("resize")
          }
        }
      } else {
        if (ab != 0) {
          ab -= ab / 5;
          if (ha(ab) < 0.01) {
            ab = 0;
            s();
            e7()
          }
          P();
          if (ge) {
            hG(hF)["trigger"]("resize")
          }
        }
      }
      H()
    },
    I = function() {
      if (ca) {
        hG("#b-zoomout")["css"]("display", N ? "" : "none");
        hG("#b-zoomin")["css"]("display", N ? "none" : "");
        m(hG("#b-zoomin"), (M > 0 && eR))
      }
    },
    H = function() {
      if (W == Y && V == X) {
        return
      }
      if (y || bZ) {
        S = W - A, B = V - z;
        A = W, z = V
      } else {
        if (S != 0 || B != 0) {
          S *= 0.9, B *= 0.9;
          if (ha(S) < 1 && ha(B) < 1) {
            S = B = 0
          } else {
            var hH = F(W + S, V + B);
            W = hH.x, V = hH.y
          }
        }
      }
      Y += (W - Y) / 5, X += (V - X) / 5;
      if (ha(W - Y) + ha(V - X) < 1) {
        Y = W, X = V
      }
      P()
    },
    G = function(hJ, hH) {
      hJ += U;
      hH += T;
      var hI = F(hJ, hH);
      if (hJ < -aa) {
        U -= (hJ + aa)
      }
      if (hJ > aa) {
        U -= (hJ - aa)
      }
      if (hH < -Z) {
        T -= (hH + Z)
      }
      if (hH > Z) {
        T -= (hH - Z)
      }
      W = hI.x;
      V = hI.y
    },
    F = function(hI, hH) {
      if (hI < -aa) {
        hI = -aa
      } else {
        if (hI > aa) {
          hI = aa
        }
      }
      if (hH < -Z) {
        hH = -Z
      } else {
        if (hH > Z) {
          hH = Z
        }
      }
      return {
        x: hI,
        y: hH
      }
    },
    E = function(hI, hH) {
      U = W - hI, T = V - hH;
      A = W;
      z = V;
      S = B = 0
    },
    D = function(hL, hJ, hK, hM, hH) {
      var hO = hK - R - cG / 2 - hL - az - cB,
        hI = hM - Q - cD / 2 - hJ - av - cz;
      var hN = (hH ? {
        x: hO,
        y: hI
      } : F(hO, hI));
      Y = W = hN.x;
      X = V = hN.y
    },
    C, l = function() {
      var hL = location.hash,
        hK, hJ;
      if (hL == "") {
        hL = (c3 ? "#" : "#page/") + gz
      }
      if (hL) {
        var hH = hL.substr(1);
        if (c3) {
          hK = false;
          hJ = hH.split("-")[0]
        } else {
          hH = hH.split("/");
          var hI = 0;
          if (hH.length == 3) {
            hK = (hH[hI++] != hD)
          }
          if (hH[hI] == "page") {
            hJ = hH[++hI]["split"]("-")[0]
          }
        }
      }
      return {
        id: hK,
        pn: hJ
      }
    },
    k = function(hI, hK) {
      var hL = location.hash;
      if (C == hL) {
        return
      }
      C = hL;
      var hH = l(),
        hJ = decodeURI(hH.pn);
      if (hJ) {
        if (hK) {
          cM = j((isNaN(hJ) ? cK(hJ) : cN(hJ)))
        } else {
          if (isNaN(hJ)) {
            aj.gotoPageName(hJ, hk)
          } else {
            aj.gotoPageNumber(hJ, hk)
          }
        }
      }
    },
    j = function(hH) {
      if (hH < gx) {
        hH = gx
      } else {
        if (hH > gv) {
          hH = gv
        }
      }
      return hH - hH % 2
    },
    i, h, g = function(hI) {
      if (i == cM) {
        return
      }
      i = cM;
      if (cM == 0 && C == "") {
        return
      }
      var hH = c3 ? hI : "page/" + hI;
      if (hD) {
        hH = hD + "/" + hH
      }
      hH = "#" + hH;
      if (hH != C) {
        location.hash = C = hH
      }
    },
    v = function(hI) {
      for (var hH = 0; hH < hI.length; hH++) {
        if (hG(hI[hH])["attr"]("class") == "controlbar") {
          return hG(hI[hH])["html"]()
        }
      }
      return null
    },
    u = function(hI) {
      var hH = hG("#pf-controls");
      if (f7) {
        hH.load(f7, "GET", t)
      } else {
        if (hI) {
          hH.html(hI);
          t()
        }
      }
    },
    t = function() {
      ca = hG("#pageflip-controls");
      ca.css("opacity", "1");
      if (hD) {
        ca.addClass(hD)
      }
      b9 = hG("#pf-pagerin");
      s();
      r();
      if (eh) {
        var hH = hG("#pf-copyright-text");
        hH.css("display", "block");
        hH.html((c3 ? ek : em))
      }
    },
    s = function(hH) {
      if (ca) {
        ca.css("z-index", (f5 || hH) ? 12 : 2)
      }
    },
    r = function() {
      var hH = "click";
      if (g2) {
        hH += " " + g0.c
      }
      hG("#b-first")["bind"](hH, function(hI) {
        af(hI);
        aj.gotoFirstPage(hk)
      });
      hG("#b-prev")["bind"](hH, function(hI) {
        af(hI);
        aj.gotoPrevPage(hk)
      });
      hG("#b-next")["bind"](hH, function(hI) {
        af(hI);
        aj.gotoNextPage(hk)
      });
      hG("#b-last")["bind"](hH, function(hI) {
        af(hI);
        aj.gotoLastPage(hk)
      });
      hG("#b-play")["bind"](hH, function(hI) {
        af(hI);
        aj.startAutoFlip()
      });
      m(hG("#b-play"), gs);
      hG("#b-pause")["bind"](hH, function(hI) {
        af(hI);
        aj.stopAutoFlip()
      });
      hG("#b-fullscreen")["bind"](hH, function(hI) {
        af(hI);
        aj.enterFullScreen()
      });
      m(hG("#b-fullscreen"), fS);
      hG("#b-fullscreenoff")["bind"](hH, function(hI) {
        af(hI);
        aj.exitFullScreen()
      });
      hG("#b-zoomin")["bind"](hH, function(hI) {
        af(hI);
        aj.zoomIn()
      });
      hG("#b-zoomout")["bind"](hH, function(hI) {
        af(hI);
        aj.zoomOut()
      });
      if (cX) {
        hG("#b-twitter")["bind"](hH, function(hI) {
          af(hI);
          bm()
        })
      } else {
        hG("#b-twitter")["css"]({
          display: "none"
        })
      }
      if (cW) {
        hG("#b-facebook")["bind"](hH, function(hI) {
          af(hI);
          bj()
        })
      } else {
        hG("#b-facebook")["css"]({
          display: "none"
        })
      }
      if (cV) {
        hG("#b-pinterest")["bind"](hH, function(hI) {
          af(hI);
          bh()
        })
      } else {
        hG("#b-pinterest")["css"]({
          display: "none"
        })
      }
      if (dz) {
        hG("#b-google")["bind"](hH, function(hI) {
          af(hI);
          bl()
        })
      } else {
        hG("#b-google")["css"]({
          display: "none"
        })
      }
      hG("#b-thumbs")["bind"](hH, function(hI) {
        af(hI);
        aj.showThumbnails()
      });
      m(hG("#b-thumbs"), f3);
      hG("#b-close")["bind"](hH, function(hI) {
        af(hI);
        aj.closePageflip()
      });
      ca.bind(gY.b, p);
      hG(".pf-control-bar-button")["bind"](gY.a, dT)["bind"](gY.c, dT);
      if (g2) {
        ca.bind(g0.b, p);
        hG(".pf-control-bar-button")["bind"](g0.a, dT)["bind"](g0.c, dT)
      }
      bY = hl;
      if (fS) {
        bV = document.getElementById("pf-stage");
        fS = (bV.requestFullscreen || bV.mozRequestFullScreen || bV.webkitRequestFullScreen || bV.msRequestFullscreen) ? hk : hl
      }
      if (fS) {
        cb.bind("webkitfullscreenchange mozfullscreenchange fullscreenchange msfullscreenchange", aY)
      } else {
        hG("#b-fullscreen")["css"]({
          display: "none"
        })
      }
      b9.focus(function(hI) {
        hG(this)["val"]("")
      });
      b9.blur(function() {
        if (hG(this)["val"]() == "") {
          n()
        }
      });
      hG("#pf-pfpager")["submit"](function() {
        o();
        return hl
      });
      b1();
      I();
      n()
    },
    q = function(hJ) {
      var hI = "w1000",
        hH = hG("#pf-controls");
      if (hJ < 480) {
        hI = "w320"
      } else {
        if (hJ < 768) {
          hI = "w480"
        } else {
          if (hJ < 1000) {
            hI = "w768"
          }
        }
      }
      hH.attr("class", hI)
    },
    p = function(hH) {
      if (!aT && !aQ) {
        dT(hH)
      }
    },
    o = function() {
      var hH = b9.val();
      if (isNaN(hH) ? !aj.gotoPageName(hH, eX) : !aj.gotoPageNumber(hH, eX)) {
        n()
      }
      b9.blur()
    },
    n = function() {
      if (!ca) {
        return
      }
      var hU = hv[cM],
        hT = hU.i,
        hS = hU.h,
        hQ = hv[cM + 1],
        hN = hQ.i,
        hL = hQ.h,
        hK = hT ? hT : (hS > 0 ? hS : hE),
        hJ = hN ? hN : (hL > 0 ? hL : hE),
        hH = (hK > 0 && hJ > 0 && (!hT && !hN)) ? 1 : 0,
        hR = e0.split("~")[hH]["split"]("#"),
        hP = "",
        hI = "";
      if (!hK) {
        hK = hJ;
        hT = hN;
        hJ = hE
      }
      if (!hJ) {
        if (hK) {
          hP = hT ? hK : hR[0] + hK + hR[1];
          hI = hK
        }
      } else {
        if (hT && hN) {
          hP = hK + " - " + hJ
        } else {
          if (hT) {
            hP = hK + " - " + hR[0] + hJ + hR[1]
          } else {
            if (hN) {
              hP = hR[0] + hK + hR[1] + " - " + hJ
            } else {
              hP = hR[0] + hK + hR[1] + hJ + hR[2]
            }
          }
        }
        hI = hK + "-" + hJ
      }
      if (c3) {
        var hO, hM;
        if (fI) {
          hO = 0, hM = 1
        } else {
          hO = cJ, hM = hO - 1
        }
        hP += " / " + (hv[hO]["h"] == 0 ? hv[hM]["h"] : hv[hO]["h"])
      }
      hI = encodeURI(hI);
      b9.val(hP);
      var hO = (cM > (gx + 1)) && !bK,
        hM = (cM < (gv - 1)) && !bK;
      m(hG("#b-first"), hO);
      m(hG("#b-prev"), fM || hO);
      m(hG("#b-next"), fM || hM);
      m(hG("#b-last"), hM);
      if (eo) {
        g(hI)
      }
    },
    m = function(hH, hI) {
      if (hI == hE) {
        hI = hk
      }
      if (hI) {
        hH.removeClass("pf-disabled")
      } else {
        f(hH)
      }
    },
    f = function(hH) {
      hH.addClass("pf-disabled")
    },
    e, d, c, b, a, e9, e8 = function() {
      var hJ = "pageflip-thumbnails",
        hS = "pf-thumbnail-container";
      if (a) {
        a.remove()
      }
      dh.after(a6((fW ? "pf-hidden" : hE), hJ, a6(hE, hS)));
      a = hG("#" + hJ);
      if (hD) {
        a.addClass(hD)
      }
      e9 = hG("#" + hS);
      e9.css("width", cJ * fm * 1.5);
      e = [];
      d = [];
      c = [];
      b = [];
      c6 = 0;
      dc = 0;
      da = 0;
      var hR = "pf-thumbnail",
        hQ = "-",
        hL = "page",
        hP = "spread",
        hO = "button",
        hM = hR + hQ + hL,
        hK = hR + hQ + hP,
        hI = hR + hQ + hO,
        hH = "#" + hR;
      for (var hN = 0, hU, hT, hJ; hN <= cJ; hN += 2) {
        hU = hv[hN]["c"] ? hN : -1, hT = hv[hN + 1]["c"] ? hN + 1 : -1;
        if (hU < 0 && hT >= 0) {
          hU = hT, hT = -1
        }
        if (hU >= 0 && hT >= 0) {
          e9.append(a6(hK, hE, a6(hI, hR + hU + hO) + a6(hI, hR + hT + hO)));
          dX(hU);
          hJ = hG(hH + hU + hO)["position"]()["left"];
          e.push(hJ + fm);
          d.push(hN);
          c.push(fm * 2);
          dX(hT);
          if (f1) {
            b.push([hU, hT])
          }
        } else {
          if (hU >= 0) {
            e9.append(a6(hM, hE, a6(hI, hR + hU + hO)));
            dX(hU);
            hJ = hG(hH + hU + hO)["position"]()["left"];
            e.push(hJ + fm / 2);
            d.push(hN);
            c.push(fm);
            if (f1) {
              b.push([hU])
            }
          }
        }
      }
      if (e.length) {
        c6 = hJ + fm * (hv[cJ]["k"] ? 1 : 2) + ax;
        e9.css("width", c6 + 20);
        if (fg) {
          a.append(a6("pf-thumbnail-control pf-control-bar-button", "pf-thleft", fu) + a6("pf-thumbnail-control pf-control-bar-button", "pf-thright", fs));
          hG(".pf-thumbnail-control")["css"]("height", fk);
          hG("#pf-thleft")["bind"]("mouseenter", eZ)["bind"]("mouseleave", eW)["bind"](gY.a, eT)["bind"](gY.c, dZ);
          hG("#pf-thright")["bind"]("mouseenter", eZ)["bind"]("mouseleave", eW)["bind"](gY.a, eT)["bind"](gY.c, dZ);
          if (g2) {
            hG("#pf-thleft")["bind"](g0.a, eT)["bind"](g0.c, dZ);
            hG("#pf-thright")["bind"](g0.a, eT)["bind"](g0.c, dZ)
          }
        }
        e7();
        c4 = hl;
        dG = 0;
        e9.bind(gY.a, dR)["bind"](gY.c, et)["bind"](gY.b, dO)["css"]("height", fk + 16);
        a.bind("mouseleave", es);
        if (g2) {
          e9.bind(g0.a, dR)["bind"](g0.c, et)["bind"](g0.b, dO)
        }
        ep = fW;
        er()
      } else {
        f3 = hl;
        a.remove()
      }
    },
    e7 = function(hH) {
      if (f3) {
        a.css("z-index", (fZ || hH) ? 11 : 1)
      }
    },
    e6 = hl,
    e5 = hl,
    e3 = 0,
    e1 = 0,
    eZ = function(hH) {
      if (!c4) {
        switch (hH.target["id"]) {
          case "pf-thleft":
            e1 = 1;
            break;
          case "pf-thright":
            e1 = -1;
            break
        }
        e6 = hk;
        e5 = hl
      }
    },
    eW = function(hH) {
      e5 = hk
    },
    eT = function(hH) {
      switch (hH.target["id"]) {
        case "pf-thleft":
          e3 = 10;
          break;
        case "pf-thright":
          e3 = -10;
          break
      }
      e6 = hk, e5 = hl;
      af(hH)
    },
    dZ = function(hH) {
      if (!c4) {
        e5 = hk;
        af(hH)
      }
    },
    dX = function(hH) {
      var hI = {
        width: fm,
        height: fk,
        "background-size": "contain"
      };
      if (!f1) {
        hI["background-image"] = "url(" + hv[hH]["c"] + ")";
        hI["background-position"] = "center center";
        hI["background-repeat"] = "no-repeat";
        g4[hH] = new Image();
        g4[hH]["src"] = hv[hH]["c"]
      }
      hG("#pf-thumbnail" + hH + "button")["attr"]("data-page", hH)["attr"]("title", "Page " + hv[hH]["h"])["css"](hI)["bind"]("click" + (g2 ? " " + g0.c : ""), dV)
    },
    dV = function(hI) {
      if (!dC && !ep && !bp) {
        var hH = hG("#" + hI.currentTarget["id"])["data"]()["page"];
        dA = hk;
        aj.gotoPage(hH, hk);
        dT(hI)
      }
    },
    dT = function(hH) {
      if (!aQ && !aT) {
        af(hH);
        hH.stopPropagation()
      }
    },
    dR = function(hH) {
      dr(dm(hH));
      dT(hH)
    },
    dO = function(hH) {
      if (ep && fX && !aQ && !aT && !y) {
        el()
      } else {
        er()
      }
      if (c1) {
        c4 = hk;
        dC = hk;
        dc = cq(dH + dm(hH));
        e9.addClass("grabbed");
        hG(".pf-thumbnail-control")["addClass"]("disabled")
      }
      dT(hH)
    },
    et = function(hH) {
      dp();
      dT(hH)
    },
    es = function(hH) {
      dp();
      if (!ep && fX) {
        en()
      }
    },
    er = function(hI) {
      if (!fX) {
        return hl
      }
      var hH = d2();
      if (hI == hE) {
        eq = hH
      } else {
        return (hH - eq) > hI
      }
    },
    eq, ep, en = function() {
      if (da != dc) {
        return
      }
      ep = hk;
      a.addClass("pf-hidden")
    },
    el = function() {
      er();
      ep = hl;
      a.removeClass("pf-hidden")
    },
    ej = function() {
      if (!ep || e6) {
        if (er(fX)) {
          en()
        }
        if (e6) {
          if (!e5) {
            e3 += e1 * 2;
            if (Math.abs(e3) > 10) {
              e1 = 0
            }
          } else {
            e3 /= 2;
            if (Math.abs(e3) < 1) {
              e3 = 0, e6 = false
            }
          }
          dc = cq(dc + e3)
        }
        if (da != dc) {
          du()
        }
      }
    },
    eg, ed, dc, da, c8, c6, c4, c1, dH, dG, dE, dC, dA, dx = function(hL) {
      if (dA) {
        dA = hl;
        return
      }
      var hK = g8(hh / 2),
        hI, hH = e.length - 1,
        hJ = d.lastIndexOf(cM);
      if (fi) {
        ed = hK - e[0];
        eg = hK - e[hH]
      } else {
        ed = hK - e[0] - hK + c[0] / 2;
        eg = hK - e[hH] + hK - c[hH] / 2;
        if (ed < eg) {
          ed = eg = g8(ed + eg / 2)
        }
      }
      if (hJ < 0) {
        if (hL) {
          hI = 0
        } else {
          return
        }
      } else {
        hI = e[hJ]
      }
      dc = cq(hK - hI);
      if (!da == hE || ep || hL) {
        da = dc + 0.5
      }
    },
    du = function() {
      if (da == dc) {
        return
      }
      if (c4) {
        dG = dc - dE;
        dE = dc
      } else {
        if (dG != 0) {
          dG *= 0.9;
          if (ha(dG) < 1) {
            dG = 0
          } else {
            dc = cq(dc + dG)
          }
        }
      }
      da += (dc - da) / 5;
      if (ha(dc - da) < 1) {
        da = dc, dG = 0
      }
      e9.css("transform", ah(da, 0));
      if (f1 && !(ha(da - c8) < 32)) {
        c8 = da;
        var hM = -fm - 32,
          hI = hh + fm + 32,
          hH = b.length,
          hJ = 0;
        while (hJ < hH && e[hJ] + da < hM) {
          hJ++
        }
        while (hJ < hH && e[hJ] + da < hI) {
          if (b[hJ]) {
            for (var hK = 0, hL; hK < b[hJ]["length"]; hK++) {
              hL = b[hJ][hK];
              hG("#pf-thumbnail" + hL + "button")["css"]({
                "background-image": "url(" + hv[hL]["c"] + ")",
                "background-position": "center center",
                "background-repeat": "no-repeat",
                "background-size": "contain"
              });
              g4[hL] = new Image();
              g4[hL]["src"] = hv[hL]["c"]
            }
            b[hJ] = null
          }
          hJ++
        }
      }
    },
    dr = function(hH) {
      c1 = hk;
      c4 = hl;
      dC = hl;
      dE = dc;
      dH = dc - hH
    },
    dp = function() {
      dC = c4;
      c4 = c1 = hl;
      e9.removeClass("grabbed");
      hG(".pf-thumbnail-control")["removeClass"]("disabled")
    },
    dm = function(hH) {
      if (g2) {
        if (hH.originalEvent == hE) {
          return 0
        }
        hH = hH.originalEvent["changedTouches"] || [hH];
        hH = hH[0]
      }
      return hH.pageX
    },
    cq = function(hH) {
      hH = gC(hH);
      if (hH < eg) {
        hH = eg
      } else {
        if (hH > ed) {
          hH = ed
        }
      }
      return hH
    },
    co = function(hO, hN, hL) {
      var hQ = hl;
      if (hO < gx || hO > gv) {
        return hQ
      }
      if (!bp && aW.length == 0) {
        hO -= hO % 2;
        if (hO != cM) {
          hQ = hk;
          if (hL) {
            cM = hO;
            eF()
          } else {
            var hK = hO - cM;
            if (hN) {
              if (hv[hO]["p"] != hv[cM + 1]["p"] && ha(hK) > 2) {
                if (hK < 0) {
                  aU(0, hK + 2);
                  aU(200, -2)
                } else {
                  aU(0, hK - 2);
                  aU(200, 2)
                }
              } else {
                if (hv[hO + 1]["p"] != hv[cM]["p"] && ha(hK) > 2) {
                  if (hK < 0) {
                    aU(0, -2);
                    aU(200, hK + 2)
                  } else {
                    aU(0, 2);
                    aU(200, hK - 2)
                  }
                } else {
                  aU(0, hK)
                }
              }
            } else {
              var hJ = 999,
                hI;
              if (hK < 0) {
                hI = -1;
                hK *= -1
              } else {
                hI = 1
              }
              hK /= 2;
              if (hK < hJ) {
                hJ = hK
              }
              var hH = 0,
                hR = 0,
                hM = hK / hJ;
              for (var hP = 0; hP < hJ; hP++) {
                hH = gC(hM * (hP + 1));
                aU((hP ? ex / 4 : 0), (hH - hR) * 2 * hI);
                hR = hH
              }
            }
          }
        }
      }
      return hQ
    },
    cm = function(hH, hI) {
      co(cN(hH), hI)
    },
    ck = function(hH, hI) {
      co(cK(hH), hI)
    },
    ci = function(hH, hI) {
      co(cH(hH), hI)
    },
    cf = function(hH) {
      if (bw() || c3) {
        co((fI && !hH) ? gv : gx, hk)
      }
    },
    cU = function(hH) {
      if (bw() || c3) {
        if (fM && (!(fI && !hH) ? cM < (gx + 1) : cM > (gv - 2))) {
          return cR(hH)
        }
        return de((fI && !hH) ? 1 : -1, (d4 && !fI) ? 1 : 0, 2)
      }
    },
    cT = function(hH) {
      if (bw() || c3) {
        if (fM && ((fI && !hH) ? cM < (gx + 1) : cM > (gv - 2))) {
          return cf(hH)
        }
        return de((fI && !hH) ? -1 : 1, (d4 && fI) ? 1 : 0, 2)
      }
    },
    cR = function(hH) {
      if (bw() || c3) {
        co((fI && !hH) ? gx : gv, hk)
      }
    },
    cP = function() {
      var hH = bn.length - 1,
        hI = bn[hH];
      hI.e = false;
      dD(hH);
      aT = hl;
      eF()
    },
    cN = function(hH) {
      return hH > 0 ? cE.lastIndexOf(parseInt(hH)) : -1
    },
    cK = function(hH) {
      return cC.lastIndexOf(hH.toLowerCase())
    },
    cH = function(hH) {
      return cA.lastIndexOf(hH)
    },
    cE, cC, cA, bE = function() {
      cE = [], cC = [], cA = [];
      for (var hI = 0, hH; hI <= cJ; hI++) {
        cE[hI] = hv[hI]["h"];
        cC[hI] = hv[hI]["i"] ? String(hv[hI]["i"])["toLowerCase"]() : hE;
        cA[hI] = hv[hI]["j"]
      }
    },
    bC = function(hI, hH) {
      if (hH) {
        hv[hI]["v"] = hH
      } else {
        return hv[hI]["v"]
      }
    },
    bA = function() {
      if (aT) {
        cP()
      }
      return !(bK || aT || aQ || bZ)
    },
    by = function(hI, hH) {
      if (hI == hE) {
        hI = 0
      }
      if (hH == hE) {
        hH = cJ
      }
      gx = fI ? cJ - hH : hI;
      gv = fI ? cJ - hI : hH;
      if (gx < 0) {
        gx = 0
      }
      if (gv > cJ) {
        gv = cJ
      }
      gx -= gx % 2;
      gv += (1 - gv % 2)
    },
    bw = function() {
      return !(N && !eN)
    },
    bt, b8 = function() {
      var hH = hv[cM]["x"] || hv[cM + 1]["x"] || fQ;
      bt = hF.setTimeout(b3, hH)
    },
    b7 = function(hH) {
      if (hH == hE) {
        hH = hk
      }
      if (!bK) {
        bK = hk;
        if (hH) {
          b3()
        } else {
          b8()
        }
      }
    },
    b5 = function() {
      if (bK) {
        bK = hl;
        hF.clearTimeout(bt);
        if (!bp) {
          n()
        }
      }
    },
    b3 = function() {
      if (!cT(hl)) {
        if (fO != 0) {
          cf()
        }
        if (fO < 1) {
          aj.stopAutoFlip();
          return
        }
      }
      b8()
    },
    b1 = function() {
      if (ca) {
        hG("#b-pause")["css"]("display", bK ? "" : "none");
        hG("#b-play")["css"]("display", bK ? "none" : "")
      }
    },
    bY, bV, bS, bQ, bO = function() {
      if (bV.requestFullscreen) {
        bV.requestFullscreen()
      } else {
        if (bV.mozRequestFullScreen) {
          bV.mozRequestFullScreen()
        } else {
          if (bV.webkitRequestFullScreen) {
            bV.webkitRequestFullScreen()
          } else {
            if (bV.msRequestFullscreen) {
              bV.msRequestFullscreen()
            }
          }
        }
      }
    },
    a2 = function() {
      if (document.exitFullscreen) {
        document.exitFullscreen()
      } else {
        if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen()
        } else {
          if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen()
          } else {
            if (document.msExitFullscreen) {
              document.msExitFullscreen()
            }
          }
        }
      }
    },
    a0 = function() {
      if (fS) {
        hG("#b-fullscreen")["css"]("display", bY ? "none" : "");
        hG("#b-fullscreenoff")["css"]("display", bY ? "" : "none")
      }
    },
    aY = function(hH) {
      bY = !bY;
      a0();
      aB()
    },
    aW, aU = function(hJ, hI) {
      var hH = {
        c: hJ,
        b: hI,
        a: hE
      };
      aW.push(hH)
    },
    aR = function() {
      var hI = d2(),
        hH = aW[0];
      if (!hH.a) {
        hH.a = d2()
      }
      if (hH.c < (hI - hH.a)) {
        if (de((hH.b < 0) ? -1 : 1, 0, ha(hH.b))) {
          aW.splice(0, 1)
        }
      }
    },
    bm = function() {
      bf("https://twitter.com/intent/tweet?original_referer=" + bb() + "&url=" + bb() + (dK ? "&text=" + bd(dK) + (dJ ? bd(" via " + dJ) : "") : ""))
    },
    bl = function() {
      bf("https://plus.google.com/share?url=" + bb() + "&gpsrc=frameless&partnerid=frameless")
    },
    bj = function() {
      bf("https://www.facebook.com/sharer/sharer.php?u=" + bb())
    },
    bh = function() {
      if (!dI) {
        dI = "http://pageflip-books.com/images/shareimage.jpg"
      }
      bf("http://pinterest.com/pin/create/button/?url=" + bb() + "&media=" + bd(dI) + (dK ? "&description=" + bd(dK) : ""))
    },
    bf = function(hH) {
      hF.open(hH, "_blank")
    },
    bd = function(hH) {
      return encodeURIComponent(hH)
    },
    bb = function() {
      return bd(dL ? dL : hF.location["href"])
    },
    a9, a8, a7, aA, ay, aw = function(hH) {
      a7 = hH;
      ay = (hD ? hD : "Untitled");
      aA = "Pageflip5 - " + ay;
      a8 = [];
      a9 = d2();
      ao()
    },
    au = function() {
      var hH = d2() - a9;
      switch (a7) {
        case 0:
          break;
        case 1:
          _gaq.push(["_trackEvent", aA, "Book time", ay, hH, hk]);
          break;
        case 2:
          break
      }
    },
    ar = function(hH) {
      a8[hH] = d2()
    },
    ap = function(hI) {
      var hH = d2() - a8[hI];
      switch (a7) {
        case 0:
          break;
        case 1:
          _gaq.push(["_trackEvent", aA, "Page " + hI + " Time", ay, hH, hk]);
          break;
        case 2:
          break
      }
    },
    ao = function() {
      switch (a7) {
        case 0:
          break;
        case 1:
          _gaq.push(["_trackEvent", aA, "Book Opened", ay, 0, hk]);
          break;
        case 2:
          break
      }
    },
    am = function(hH) {
      switch (a7) {
        case 0:
          break;
        case 1:
          _gaq.push(["_trackEvent", aA, "Page " + hH + " View", ay, 0, hk]);
          break;
        case 2:
          break
      }
    },
    al = ["onFlip", "onFlipEnd", "onTop", "onTopEnd", "onLoad", "onUnload", "onRemove", "onHide", "onShow", "onZoomIn", "onZoomOut"],
    ak = function(hI, hJ) {
      if (bq) {
        var hH = bq[al[hI]];
        if (hH) {
          hH(hJ)
        }
      }
      if (a7) {
        if (hI == 2) {
          am(hJ);
          ar(hJ)
        } else {
          if (hI == 3) {
            ap(hJ)
          }
        }
      }
    },
    aj = {
      gotoPage: function(hH, hI) {
        if (bA()) {
          return co(hH, hI)
        }
      },
      gotoPageNumber: function(hH, hI) {
        if (bA()) {
          return cm(hH, hI)
        }
      },
      gotoPageName: function(hH, hI) {
        if (bA()) {
          return ck(hH, hI)
        }
      },
      gotoPageLabel: function(hH, hI) {
        if (bA()) {
          return ci(hH, hI)
        }
      },
      gotoFirstPage: function(hH) {
        if (bA()) {
          cf(hH)
        }
      },
      gotoPrevPage: function(hH) {
        if (bA()) {
          cU(hH)
        }
      },
      gotoNextPage: function(hH) {
        if (bA()) {
          cT(hH)
        }
      },
      gotoLastPage: function(hH) {
        if (bA()) {
          cR(hH)
        }
      },
      startAutoFlip: function(hH) {
        if (bA() && gs) {
          b7(hH);
          b1()
        }
      },
      stopAutoFlip: function() {
        if (bK) {
          b5();
          b1()
        }
      },
      toggleAutoFlip: function() {
        bK ? aj.stopAutoFlip() : aj.startAutoFlip()
      },
      setPFEventCallBack: function(hH) {
        bq = hH
      },
      closePageflip: function(hH) {
        aD(hH)
      },
      getID: function() {
        return hD
      },
      getPN: function() {
        return cM
      },
      getPageNumber: function(hH) {
        return hv[hH ? hH : cM]["h"]
      },
      getPageName: function(hH) {
        return hv[hH ? hH : cM]["i"]
      },
      getPageLabel: function(hH) {
        return hv[hH ? hH : cM]["j"]
      },
      showThumbnails: function() {
        if (f3) {
          ep ? el() : en()
        }
      },
      hideThumbnails: function() {
        if (f3) {
          en()
        }
      },
      zoomIn: function() {
        if (eR) {
          L();
          I()
        }
      },
      zoomOut: function() {
        K();
        I()
      },
      toggleZoom: function() {
        N ? aj.zoomOut() : aj.zoomIn()
      },
      hotKeys: function(hH) {
        eK = hH
      },
      mouseControl: function(hH) {
        dQ = hH
      },
      pageLimit: function(hI, hH) {
        by(hI, hH)
      },
      data: function(hI, hH) {
        return bC(hI, hH)
      },
      enterFullScreen: function() {
        return bO()
      },
      exitFullScreen: function() {
        return a2()
      },
      addPage: function(hJ, hI, hH) {
        fG(hG(hJ), hI, hH)
      },
      reloadPage: function(hH) {},
      removePage: function(hJ, hH, hI) {
        eY(hJ, hH, hI)
      }
    },
    ai = function(hH, hI) {
      if (hH == hE) {
        return aj
      }
      return dj ? aj[hH](hI) : []
    };
  hG.extend(hG.fn, {
    pageflipInit: ae,
    pageflip: ai
  })
})(jQuery, this);
﻿var Key = { Copyright: "©2016 Simplebooklet.com", Key: "ytYtK7EmA6jjXiMaNc"};
