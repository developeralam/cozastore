<script>
    (function(document, player) {
        var config = {
            cdn_url: "https://f.vimeocdn.com",
            vimeo_api_url: "api.vimeo.com",
            request: {
                files: {
                    dash: {
                        separate_av: true,
                        streams: [{
                                profile: 139,
                                quality: "240p",
                                id: "8e72d5ec-b481-43b5-8f66-0841ff684b5b",
                                fps: 30
                            },
                            {
                                profile: 165,
                                quality: "540p",
                                id: "c98bc132-541d-4880-aab4-5d23cbc3ca07",
                                fps: 30
                            },
                            {
                                profile: 174,
                                quality: "720p",
                                id: "8d97ce09-4e21-42b7-af5a-d6adee639058",
                                fps: 30
                            },
                            {
                                profile: 164,
                                quality: "360p",
                                id: "2dfdf6dd-c8cc-4950-bb3a-99b8c27dc31d",
                                fps: 30
                            },
                            {
                                profile: 175,
                                quality: "1080p",
                                id: "587826c6-7f8f-4e53-a594-ca69beeefe0d",
                                fps: 30
                            },
                        ],
                        cdns: {
                            akfire_interconnect_quic: {
                                url: "https://129vod-adaptive.akamaized.net/exp=1650346899~acl=%2Fac9664b0-71c9-47ac-849e-6694d22427f8%2F%2A~hmac=49e1888b9ed242d80cf23b7a59130c1355e2c9c6315be764e39919a9e3101a7f/ac9664b0-71c9-47ac-849e-6694d22427f8/sep/video/8e72d5ec,c98bc132,8d97ce09,2dfdf6dd,587826c6/audio/e11a0775,105b6963/master.json?query_string_ranges=1&base64_init=1",
                                origin: "gcs",
                                avc_url: "https://129vod-adaptive.akamaized.net/exp=1650346899~acl=%2Fac9664b0-71c9-47ac-849e-6694d22427f8%2F%2A~hmac=49e1888b9ed242d80cf23b7a59130c1355e2c9c6315be764e39919a9e3101a7f/ac9664b0-71c9-47ac-849e-6694d22427f8/sep/video/8e72d5ec,c98bc132,8d97ce09,2dfdf6dd,587826c6/audio/e11a0775,105b6963/master.json?query_string_ranges=1&base64_init=1",
                            },
                            fastly_skyfire: {
                                url: "https://skyfire.vimeocdn.com/1650346899-0x62102fe50aca4d88fd958d3a3aa65751b9a69781/ac9664b0-71c9-47ac-849e-6694d22427f8/sep/video/8e72d5ec,c98bc132,8d97ce09,2dfdf6dd,587826c6/audio/e11a0775,105b6963/master.json?query_string_ranges=1&base64_init=1",
                                origin: "gcs",
                                avc_url: "https://skyfire.vimeocdn.com/1650346899-0x62102fe50aca4d88fd958d3a3aa65751b9a69781/ac9664b0-71c9-47ac-849e-6694d22427f8/sep/video/8e72d5ec,c98bc132,8d97ce09,2dfdf6dd,587826c6/audio/e11a0775,105b6963/master.json?query_string_ranges=1&base64_init=1",
                            },
                        },
                        streams_avc: [{
                                profile: 139,
                                quality: "240p",
                                id: "8e72d5ec-b481-43b5-8f66-0841ff684b5b",
                                fps: 30
                            },
                            {
                                profile: 165,
                                quality: "540p",
                                id: "c98bc132-541d-4880-aab4-5d23cbc3ca07",
                                fps: 30
                            },
                            {
                                profile: 174,
                                quality: "720p",
                                id: "8d97ce09-4e21-42b7-af5a-d6adee639058",
                                fps: 30
                            },
                            {
                                profile: 164,
                                quality: "360p",
                                id: "2dfdf6dd-c8cc-4950-bb3a-99b8c27dc31d",
                                fps: 30
                            },
                            {
                                profile: 175,
                                quality: "1080p",
                                id: "587826c6-7f8f-4e53-a594-ca69beeefe0d",
                                fps: 30
                            },
                        ],
                        default_cdn: "akfire_interconnect_quic",
                    },
                    hls: {
                        separate_av: true,
                        default_cdn: "akfire_interconnect_quic",
                        cdns: {
                            akfire_interconnect_quic: {
                                url: "https://129vod-adaptive.akamaized.net/exp=1650346899~acl=%2Fac9664b0-71c9-47ac-849e-6694d22427f8%2F%2A~hmac=49e1888b9ed242d80cf23b7a59130c1355e2c9c6315be764e39919a9e3101a7f/ac9664b0-71c9-47ac-849e-6694d22427f8/sep/video/2dfdf6dd,587826c6,8d97ce09,8e72d5ec,c98bc132/audio/e11a0775,105b6963/master.m3u8?query_string_ranges=1",
                                origin: "gcs",
                                avc_url: "https://129vod-adaptive.akamaized.net/exp=1650346899~acl=%2Fac9664b0-71c9-47ac-849e-6694d22427f8%2F%2A~hmac=49e1888b9ed242d80cf23b7a59130c1355e2c9c6315be764e39919a9e3101a7f/ac9664b0-71c9-47ac-849e-6694d22427f8/sep/video/2dfdf6dd,587826c6,8d97ce09,8e72d5ec,c98bc132/audio/e11a0775,105b6963/master.m3u8?query_string_ranges=1",
                            },
                            fastly_skyfire: {
                                url: "https://skyfire.vimeocdn.com/1650346899-0x62102fe50aca4d88fd958d3a3aa65751b9a69781/ac9664b0-71c9-47ac-849e-6694d22427f8/sep/video/2dfdf6dd,587826c6,8d97ce09,8e72d5ec,c98bc132/audio/e11a0775,105b6963/master.m3u8?query_string_ranges=1",
                                origin: "gcs",
                                avc_url: "https://skyfire.vimeocdn.com/1650346899-0x62102fe50aca4d88fd958d3a3aa65751b9a69781/ac9664b0-71c9-47ac-849e-6694d22427f8/sep/video/2dfdf6dd,587826c6,8d97ce09,8e72d5ec,c98bc132/audio/e11a0775,105b6963/master.m3u8?query_string_ranges=1",
                            },
                        },
                    },
                    progressive: [{
                            profile: "164",
                            width: 640,
                            mime: "video/mp4",
                            fps: 30,
                            url: "https://vod-progressive.akamaized.net/exp=1650346899~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F4476%2F19%2F497384545%2F2253983500.mp4~hmac=e90ac5cea1d6e15c16367e50bb1bd743f4aa6fa00f3ed8401a7e77184fd00a59/vimeo-prod-skyfire-std-us/01/4476/19/497384545/2253983500.mp4",
                            cdn: "akamai_interconnect",
                            quality: "360p",
                            id: "2dfdf6dd-c8cc-4950-bb3a-99b8c27dc31d",
                            origin: "gcs",
                            height: 344,
                        },
                        {
                            profile: "175",
                            width: 1920,
                            mime: "video/mp4",
                            fps: 30,
                            url: "https://vod-progressive.akamaized.net/exp=1650346899~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F4476%2F19%2F497384545%2F2253983516.mp4~hmac=21f4cd928d3c8aac670ac4a9455476eb5b9eadd4dabbbfeac6897b8ffc64cb0f/vimeo-prod-skyfire-std-us/01/4476/19/497384545/2253983516.mp4",
                            cdn: "akamai_interconnect",
                            quality: "1080p",
                            id: "587826c6-7f8f-4e53-a594-ca69beeefe0d",
                            origin: "gcs",
                            height: 1028,
                        },
                        {
                            profile: "174",
                            width: 1346,
                            mime: "video/mp4",
                            fps: 30,
                            url: "https://vod-progressive.akamaized.net/exp=1650346899~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F4476%2F19%2F497384545%2F2253983495.mp4~hmac=9c7a0ff623a9b168d934db062b70a982322ebd9fabef7edcd000f60fdcd9995a/vimeo-prod-skyfire-std-us/01/4476/19/497384545/2253983495.mp4",
                            cdn: "akamai_interconnect",
                            quality: "720p",
                            id: "8d97ce09-4e21-42b7-af5a-d6adee639058",
                            origin: "gcs",
                            height: 720,
                        },
                        {
                            profile: "139",
                            width: 426,
                            mime: "video/mp4",
                            fps: 30,
                            url: "https://vod-progressive.akamaized.net/exp=1650346899~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F4476%2F19%2F497384545%2F2253983518.mp4~hmac=561906967f8cf21fe3ef91e4eee6d737dcd2c31950b0eb9cdf38ab78cb5a4add/vimeo-prod-skyfire-std-us/01/4476/19/497384545/2253983518.mp4",
                            cdn: "akamai_interconnect",
                            quality: "240p",
                            id: "8e72d5ec-b481-43b5-8f66-0841ff684b5b",
                            origin: "gcs",
                            height: 228,
                        },
                        {
                            profile: "165",
                            width: 960,
                            mime: "video/mp4",
                            fps: 30,
                            url: "https://vod-progressive.akamaized.net/exp=1650346899~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F4476%2F19%2F497384545%2F2253983525.mp4~hmac=634717bc19de41baf18a3e766cb27c91747ad2d0cc4686b4a7535212ced1b59d/vimeo-prod-skyfire-std-us/01/4476/19/497384545/2253983525.mp4",
                            cdn: "akamai_interconnect",
                            quality: "540p",
                            id: "c98bc132-541d-4880-aab4-5d23cbc3ca07",
                            origin: "gcs",
                            height: 514,
                        },
                    ],
                },
                lang: "en",
                sentry: {
                    url: "https://6f5f8e1cecfa40fb850f578b69fc1705@o189131.ingest.sentry.io/1297650",
                    enabled: false,
                    debug_enabled: true,
                    debug_intent: 0
                },
                ab_tests: {
                    webvr: {
                        track: false,
                        data: {},
                        group: false
                    },
                    chromecast: {
                        track: false,
                        data: {},
                        group: false
                    },
                    cmcd: {
                        track: false,
                        data: {},
                        group: false
                    },
                    llhls_timeout: {
                        track: true,
                        data: {},
                        group: false
                    },
                    stats_fresnel: {
                        track: false,
                        data: {},
                        group: true
                    },
                },
                referrer: "https://instructory.net/",
                cookie_domain: ".vimeo.com",
                timestamp: 1650342999,
                gc_debug: {
                    bucket: "vimeo-player-debug"
                },
                expires: 3600,
                client: {
                    ip: "45.125.220.162"
                },
                currency: "USD",
                session: "ca272642c3aa916acea486b078dfdd4d20fe6c2a1650342999",
                cookie: {
                    scaling: 1,
                    volume: 0.958,
                    quality: null,
                    hd: 0,
                    captions: null
                },
                build: {
                    backend: "1.46.29",
                    js: "3.51.11"
                },
                urls: {
                    barebone_js: "https://f.vimeocdn.com/p/3.51.11/js/barebone.js",
                    test_imp: "https://fresnel.vimeocdn.com/add/player-test-impression",
                    js_base: "https://f.vimeocdn.com/p/3.51.11/js/",
                    fresnel: "https://fresnel.vimeocdn.com/add/player-stats",
                    js: "https://f.vimeocdn.com/p/3.51.11/js/player.js",
                    proxy: "https://player.vimeo.com/static/proxy.html",
                    mux_url: "https://f.vimeocdn.com/p/external/mux.js",
                    fresnel_mimir_inputs_url: "https://fresnel-events.vimeocdn.com/add/mimir_inputs",
                    fresnel_chunk_url: "https://fresnel-events.vimeocdn.com/add/chunk_downloads",
                    three_js: "https://f.vimeocdn.com/p/external/three.rvimeo.min.js",
                    vuid_js: "https://f.vimeocdn.com/js_opt/modules/utils/vuid.min.js",
                    fresnel_manifest_url: "https://fresnel-events.vimeocdn.com/add/playback_manifest",
                    chromeless_css: "https://f.vimeocdn.com/p/3.51.11/css/chromeless.css",
                    player_telemetry_url: "https://player-telemetry.vimeo.com/player-events",
                    chromeless_js: "https://f.vimeocdn.com/p/3.51.11/js/chromeless.js",
                    css: "https://f.vimeocdn.com/p/3.51.11/css/player.css",
                },
                signature: "d07f8563ec14bbf9369f5a61420f0fc8",
                flags: {
                    dnt: 0,
                    preload_video: "metadata_on_hover",
                    plays: 1,
                    partials: 1,
                    autohide_controls: 0
                },
                country: "BD",
                file_codecs: {
                    hevc: {
                        hdr: [],
                        sdr: [],
                        dvh1: []
                    },
                    av1: [],
                    avc: ["2dfdf6dd-c8cc-4950-bb3a-99b8c27dc31d", "587826c6-7f8f-4e53-a594-ca69beeefe0d", "8d97ce09-4e21-42b7-af5a-d6adee639058", "8e72d5ec-b481-43b5-8f66-0841ff684b5b", "c98bc132-541d-4880-aab4-5d23cbc3ca07"],
                },
            },
            player_url: "player.vimeo.com",
            video: {
                version: {
                    current: null,
                    available: [{
                        is_current: 1,
                        id: 188343757,
                        file_id: 2253982618
                    }]
                },
                height: 1028,
                duration: 545,
                thumbs: {
                    "1280": "https://i.vimeocdn.com/video/1029307280-df032d1865456a03797461553db1ac26a6143e9a33f081f19ce7c48f6cd64e5b-d_1280",
                    "960": "https://i.vimeocdn.com/video/1029307280-df032d1865456a03797461553db1ac26a6143e9a33f081f19ce7c48f6cd64e5b-d_960",
                    "640": "https://i.vimeocdn.com/video/1029307280-df032d1865456a03797461553db1ac26a6143e9a33f081f19ce7c48f6cd64e5b-d_640",
                    base: "https://i.vimeocdn.com/video/1029307280-df032d1865456a03797461553db1ac26a6143e9a33f081f19ce7c48f6cd64e5b-d",
                },
                owner: {
                    account_type: "live_premium",
                    name: "Instructory",
                    img: "https://i.vimeocdn.com/portrait/33129813_60x60.jpg",
                    url: "https://vimeo.com/user101249243",
                    img_2x: "https://i.vimeocdn.com/portrait/33129813_120x120.jpg",
                    id: 101249243,
                },
                id: 497384545,
                embed_code: '<iframe title="vimeo-player" src="https://player.vimeo.com/video/497384545?h=1836a64cb9" width="640" height="342" frameborder="0" allowfullscreen><\/iframe>',
                title: "12. Mass Assignment",
                share_url: "https://vimeo.com/497384545",
                width: 1920,
                embed_permission: "whitelist",
                fps: 30.0,
                spatial: 0,
                live_event: null,
                allow_hd: 1,
                hd: 1,
                lang: null,
                default_to_hd: 0,
                url: null,
                privacy: "disable",
                bypass_token: "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbGlwX2lkIjo0OTczODQ1NDUsImV4cCI6MTY1MDM0NjYyMH0.PflEKJbLxYQVMrCPnIIPulX1Lhyz0kIkYdZxQYZ868Q",
                unlisted_hash: null,
            },
            user: {
                team_origin_user_id: 0,
                liked: 0,
                account_type: "none",
                vimeo_api_client_token: null,
                vimeo_api_interaction_tokens: null,
                team_id: 0,
                watch_later: 0,
                owner: 0,
                id: 0,
                mod: 0,
                private_mode_enabled: 0,
                logged_in: 0
            },
            embed: {
                autopause: 1,
                playsinline: 1,
                settings: {
                    fullscreen: 1,
                    byline: 1,
                    like: 1,
                    playbar: 1,
                    title: 1,
                    color: 0,
                    speed: 1,
                    watch_later: 0,
                    share: 0,
                    scaling: 1,
                    spatial_compass: 0,
                    collections: 0,
                    custom_logo: {
                        url: null,
                        width: 100,
                        height: 21,
                        img: "https://i.vimeocdn.com/player/358470.png?mw=100&mh=100",
                        sticky: 1
                    },
                    portrait: 0,
                    logo: 1,
                    embed: 0,
                    badge: 0,
                    spatial_label: 0,
                    volume: 1,
                },
                color: "00adef",
                texttrack: "",
                on_site: 0,
                app_id: "122963",
                muted: 0,
                dnt: 0,
                player_id: "",
                api: null,
                editor: false,
                context: "embed.main",
                keyboard: 1,
                outro: "share",
                transparent: 1,
                log_plays: 1,
                quality: null,
                time: 0,
                loop: 0,
                autoplay: 1,
            },
            view: 1,
            vimeo_url: "vimeo.com",
        };
        if (!config.request) {
            return;
        }
        if (typeof config.request === "object" && "error" in config.request) {
            if ("html" in config.request) {
                document.documentElement.innerHTML = config.request.html.replace(/&lt;/g, "<").replace(/&gt;/g, ">");
            }
            return;
        }
        var isIframe = (function() {
            try {
                return window.self !== window.top;
            } catch (e) {
                return true;
            }
        })();
        if (!isIframe && /twitter/i.test(navigator.userAgent) && config.video.url) {
            window.location = config.video.url;
        }
        if (config.request.lang) {
            document.documentElement.setAttribute("lang", config.request.lang);
        }
        var fullscreenSupport =
            "exitFullscreen" in document ||
            "webkitExitFullscreen" in document ||
            "webkitCancelFullScreen" in document ||
            "mozCancelFullScreen" in document ||
            "msExitFullscreen" in document ||
            "webkitEnterFullScreen" in document.createElement("video");
        var inlineSvgSupport = (function() {
            var div = document.createElement("div");
            div.innerHTML = "<svg/>";
            return (div.firstChild && div.firstChild.namespaceURI) === "http://www.w3.org/2000/svg";
        })();
        var windowsPhone = /MSIE 9/.test(navigator.userAgent) && /Windows Phone/.test(navigator.userAgent);
        var IE10 = /IE 10/.test(navigator.userAgent);
        var usePlayer = fullscreenSupport || IE10 || windowsPhone;
        var firstScript = document.getElementsByTagName("script")[0];
        var script = document.createElement("script");
        var jsDone = false;
        var playerObject = false;
        if (!inlineSvgSupport) {
            usePlayer = false;
        }
        if (!usePlayer) {
            var placeholder = document.querySelector(".vp-placeholder");
            if (placeholder && placeholder.parentNode) {
                placeholder.parentNode.removeChild(placeholder);
            }
        }
        if (usePlayer) {
            player.className = "player loading";
            var startTime = new Date().getTime();
            script.src = config.request.urls.js;
            firstScript.parentNode.insertBefore(script, firstScript);
            script["onreadystatechange" in script ? "onreadystatechange" : "onload"] = function() {
                if (!jsDone && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) {
                    jsDone = true;
                    playerObject = new VimeoPlayer(player, config, cssDone || {
                        link: link,
                        startTime: startTime
                    });
                }
            };
            var cssDone = false;
            var link = document.createElement("link");
            link.rel = "stylesheet";
            link.href = config.request.urls.css + (typeof cacheBuster === "undefined" ? "" : cacheBuster);
            document.getElementsByTagName("head")[0].appendChild(link);
            link.onload = function() {
                cssDone = true;
            };
        } else {
            player.innerHTML = '<div class="fallback"><iframe title="vimeo-player" src="/video/497384545/fallback?js&amp;referrer=' + encodeURIComponent(config.request.referrer) + '" frameborder="0"></iframe></div>';
        }
        if (!config.request.flags.dnt && !config.embed.dnt) {
            window._vuid = [
                ["pid", config.request.session]
            ];
            var vim = document.createElement("script");
            vim.async = true;
            vim.src = config.request.urls.vuid_js;
            firstScript.parentNode.insertBefore(vim, firstScript);
        }
    })(document, document.getElementById("player"));
</script>