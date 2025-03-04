<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.0.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.0.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-auth-login">
                                <a href="#endpoints-POSTapi-auth-login">College Admin Login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-auth-logout">
                                <a href="#endpoints-POSTapi-auth-logout">POST api/auth/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-auth-verify--token-">
                                <a href="#endpoints-GETapi-auth-verify--token-">GET api/auth/verify/{token}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-colleges--id-">
                                <a href="#endpoints-GETapi-college-admin-colleges--id-">GET api/college-admin/colleges/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-college-admin-colleges--id-">
                                <a href="#endpoints-PUTapi-college-admin-colleges--id-">PUT api/college-admin/colleges/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-contacts--id-">
                                <a href="#endpoints-GETapi-college-admin-contacts--id-">GET api/college-admin/contacts/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-college-admin-contacts--id-">
                                <a href="#endpoints-PUTapi-college-admin-contacts--id-">PUT api/college-admin/contacts/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-galleries--id-">
                                <a href="#endpoints-GETapi-college-admin-galleries--id-">GET api/college-admin/galleries/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-college-admin-galleries--id-">
                                <a href="#endpoints-PUTapi-college-admin-galleries--id-">PUT api/college-admin/galleries/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-faculties">
                                <a href="#endpoints-GETapi-college-admin-faculties">GET api/college-admin/faculties</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-faculties--id-">
                                <a href="#endpoints-GETapi-college-admin-faculties--id-">GET api/college-admin/faculties/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-college-admin-faculties--id-">
                                <a href="#endpoints-PUTapi-college-admin-faculties--id-">PUT api/college-admin/faculties/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-placements--id-">
                                <a href="#endpoints-GETapi-college-admin-placements--id-">GET api/college-admin/placements/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-college-admin-placements--id-">
                                <a href="#endpoints-PUTapi-college-admin-placements--id-">PUT api/college-admin/placements/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-articles">
                                <a href="#endpoints-GETapi-college-admin-articles">GET api/college-admin/articles</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-courses">
                                <a href="#endpoints-GETapi-college-admin-courses">GET api/college-admin/courses</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-courses--id-">
                                <a href="#endpoints-GETapi-college-admin-courses--id-">GET api/college-admin/courses/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-college-admin-courses--id-">
                                <a href="#endpoints-PUTapi-college-admin-courses--id-">PUT api/college-admin/courses/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-leads">
                                <a href="#endpoints-GETapi-college-leads">GET api/college/leads</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-leads--lead-">
                                <a href="#endpoints-GETapi-college-leads--lead-">GET api/college/leads/{lead}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-leads--lead--remarks">
                                <a href="#endpoints-GETapi-college-leads--lead--remarks">GET api/college/leads/{lead}/remarks</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-college-leads--lead--remarks">
                                <a href="#endpoints-POSTapi-college-leads--lead--remarks">POST api/college/leads/{lead}/remarks</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-colleges-submit">
                                <a href="#endpoints-POSTapi-colleges-submit">POST api/colleges/submit</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-colleges-claim">
                                <a href="#endpoints-POSTapi-colleges-claim">POST api/colleges/claim</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-colleges-search--key-">
                                <a href="#endpoints-GETapi-colleges-search--key-">GET api/colleges/search/{key}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-colleges">
                                <a href="#endpoints-GETapi-colleges">GET api/colleges</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-colleges--college_slug-">
                                <a href="#endpoints-GETapi-colleges--college_slug-">GET api/colleges/{college_slug}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-colleges--college_id--address">
                                <a href="#endpoints-GETapi-colleges--college_id--address">GET api/colleges/{college_id}/address</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-colleges--college_id--course-fees-department">
                                <a href="#endpoints-GETapi-colleges--college_id--course-fees-department">GET api/colleges/{college_id}/course-fees-department</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-colleges--college_id--faculty">
                                <a href="#endpoints-GETapi-colleges--college_id--faculty">GET api/colleges/{college_id}/faculty</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: February 26, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-auth-login">College Admin Login</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"+-0pBNvYgxwmi\\/#iw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "+-0pBNvYgxwmi\/#iw"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-login">
</span>
<span id="execution-results-POSTapi-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-login" data-method="POST"
      data-path="api/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-login"
                    onclick="tryItOut('POSTapi-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-login"
                    onclick="cancelTryOut('POSTapi-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-auth-login"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-auth-login"
               value="+-0pBNvYgxwmi/#iw"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Example: <code>+-0pBNvYgxwmi/#iw</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-auth-logout">POST api/auth/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/auth/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/auth/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-logout">
</span>
<span id="execution-results-POSTapi-auth-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-logout" data-method="POST"
      data-path="api/auth/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-logout"
                    onclick="tryItOut('POSTapi-auth-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-logout"
                    onclick="cancelTryOut('POSTapi-auth-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-auth-verify--token-">GET api/auth/verify/{token}</h2>

<p>
</p>



<span id="example-requests-GETapi-auth-verify--token-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/auth/verify/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/auth/verify/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-auth-verify--token-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-auth-verify--token-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-auth-verify--token-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth-verify--token-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-auth-verify--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth-verify--token-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-auth-verify--token-" data-method="GET"
      data-path="api/auth/verify/{token}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-auth-verify--token-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-auth-verify--token-"
                    onclick="tryItOut('GETapi-auth-verify--token-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-auth-verify--token-"
                    onclick="cancelTryOut('GETapi-auth-verify--token-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-auth-verify--token-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/auth/verify/{token}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-auth-verify--token-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-auth-verify--token-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="token"                data-endpoint="GETapi-auth-verify--token-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-college-admin-colleges--id-">GET api/college-admin/colleges/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-colleges--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/college-admin/colleges/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/colleges/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-college-admin-colleges--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-colleges--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-colleges--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-colleges--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-colleges--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-colleges--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-colleges--id-" data-method="GET"
      data-path="api/college-admin/colleges/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-colleges--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-colleges--id-"
                    onclick="tryItOut('GETapi-college-admin-colleges--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-colleges--id-"
                    onclick="cancelTryOut('GETapi-college-admin-colleges--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-colleges--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/colleges/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-colleges--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-college-admin-colleges--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-college-admin-colleges--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the college. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-college-admin-colleges--id-">PUT api/college-admin/colleges/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-college-admin-colleges--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/college-admin/colleges/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"college_about\": \"n\",
    \"institute_type\": \"g\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/colleges/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "college_about": "n",
    "institute_type": "g"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-college-admin-colleges--id-">
</span>
<span id="execution-results-PUTapi-college-admin-colleges--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-college-admin-colleges--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-college-admin-colleges--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-college-admin-colleges--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-college-admin-colleges--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-college-admin-colleges--id-" data-method="PUT"
      data-path="api/college-admin/colleges/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-college-admin-colleges--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-college-admin-colleges--id-"
                    onclick="tryItOut('PUTapi-college-admin-colleges--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-college-admin-colleges--id-"
                    onclick="cancelTryOut('PUTapi-college-admin-colleges--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-college-admin-colleges--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/college-admin/colleges/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-college-admin-colleges--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-college-admin-colleges--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-college-admin-colleges--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the college. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-college-admin-colleges--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 191 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>college_about</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="college_about"                data-endpoint="PUTapi-college-admin-colleges--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 191 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>institute_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="institute_type"                data-endpoint="PUTapi-college-admin-colleges--id-"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 191 characters. Example: <code>g</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-college-admin-contacts--id-">GET api/college-admin/contacts/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-contacts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/college-admin/contacts/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/contacts/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-college-admin-contacts--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-contacts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-contacts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-contacts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-contacts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-contacts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-contacts--id-" data-method="GET"
      data-path="api/college-admin/contacts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-contacts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-contacts--id-"
                    onclick="tryItOut('GETapi-college-admin-contacts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-contacts--id-"
                    onclick="cancelTryOut('GETapi-college-admin-contacts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-contacts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/contacts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-contacts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-college-admin-contacts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-college-admin-contacts--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the contact. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-college-admin-contacts--id-">PUT api/college-admin/contacts/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-college-admin-contacts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/college-admin/contacts/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"college_address\": \"b\",
    \"pincode\": \"architecto\",
    \"college_id\": \"architecto\",
    \"state_id\": \"architecto\",
    \"district_id\": \"architecto\",
    \"city\": \"architecto\",
    \"email\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/contacts/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "college_address": "b",
    "pincode": "architecto",
    "college_id": "architecto",
    "state_id": "architecto",
    "district_id": "architecto",
    "city": "architecto",
    "email": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-college-admin-contacts--id-">
</span>
<span id="execution-results-PUTapi-college-admin-contacts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-college-admin-contacts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-college-admin-contacts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-college-admin-contacts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-college-admin-contacts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-college-admin-contacts--id-" data-method="PUT"
      data-path="api/college-admin/contacts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-college-admin-contacts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-college-admin-contacts--id-"
                    onclick="tryItOut('PUTapi-college-admin-contacts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-college-admin-contacts--id-"
                    onclick="cancelTryOut('PUTapi-college-admin-contacts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-college-admin-contacts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/college-admin/contacts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-college-admin-contacts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-college-admin-contacts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-college-admin-contacts--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the contact. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>college_address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="college_address"                data-endpoint="PUTapi-college-admin-contacts--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 191 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pincode</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pincode"                data-endpoint="PUTapi-college-admin-contacts--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>college_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="college_id"                data-endpoint="PUTapi-college-admin-contacts--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>state_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="state_id"                data-endpoint="PUTapi-college-admin-contacts--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>district_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="district_id"                data-endpoint="PUTapi-college-admin-contacts--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="PUTapi-college-admin-contacts--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-college-admin-contacts--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-college-admin-galleries--id-">GET api/college-admin/galleries/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-galleries--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/college-admin/galleries/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/galleries/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-college-admin-galleries--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-galleries--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-galleries--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-galleries--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-galleries--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-galleries--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-galleries--id-" data-method="GET"
      data-path="api/college-admin/galleries/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-galleries--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-galleries--id-"
                    onclick="tryItOut('GETapi-college-admin-galleries--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-galleries--id-"
                    onclick="cancelTryOut('GETapi-college-admin-galleries--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-galleries--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/galleries/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-galleries--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-college-admin-galleries--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-college-admin-galleries--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the gallery. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-college-admin-galleries--id-">PUT api/college-admin/galleries/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-college-admin-galleries--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/college-admin/galleries/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"college_image\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/galleries/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "college_image": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-college-admin-galleries--id-">
</span>
<span id="execution-results-PUTapi-college-admin-galleries--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-college-admin-galleries--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-college-admin-galleries--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-college-admin-galleries--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-college-admin-galleries--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-college-admin-galleries--id-" data-method="PUT"
      data-path="api/college-admin/galleries/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-college-admin-galleries--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-college-admin-galleries--id-"
                    onclick="tryItOut('PUTapi-college-admin-galleries--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-college-admin-galleries--id-"
                    onclick="cancelTryOut('PUTapi-college-admin-galleries--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-college-admin-galleries--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/college-admin/galleries/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-college-admin-galleries--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-college-admin-galleries--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-college-admin-galleries--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the gallery. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>college_image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="college_image"                data-endpoint="PUTapi-college-admin-galleries--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-college-admin-faculties">GET api/college-admin/faculties</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-faculties">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/college-admin/faculties" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/faculties"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-college-admin-faculties">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-faculties" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-faculties"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-faculties"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-faculties" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-faculties">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-faculties" data-method="GET"
      data-path="api/college-admin/faculties"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-faculties', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-faculties"
                    onclick="tryItOut('GETapi-college-admin-faculties');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-faculties"
                    onclick="cancelTryOut('GETapi-college-admin-faculties');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-faculties"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/faculties</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-faculties"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-college-admin-faculties"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-college-admin-faculties--id-">GET api/college-admin/faculties/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-faculties--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/college-admin/faculties/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/faculties/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-college-admin-faculties--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-faculties--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-faculties--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-faculties--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-faculties--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-faculties--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-faculties--id-" data-method="GET"
      data-path="api/college-admin/faculties/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-faculties--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-faculties--id-"
                    onclick="tryItOut('GETapi-college-admin-faculties--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-faculties--id-"
                    onclick="cancelTryOut('GETapi-college-admin-faculties--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-faculties--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/faculties/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-faculties--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-college-admin-faculties--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-college-admin-faculties--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the faculty. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-college-admin-faculties--id-">PUT api/college-admin/faculties/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-college-admin-faculties--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/college-admin/faculties/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"college_id\": \"architecto\",
    \"department_id\": \"architecto\",
    \"faculty_name\": \"n\",
    \"faculty_designation\": \"g\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/faculties/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "college_id": "architecto",
    "department_id": "architecto",
    "faculty_name": "n",
    "faculty_designation": "g"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-college-admin-faculties--id-">
</span>
<span id="execution-results-PUTapi-college-admin-faculties--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-college-admin-faculties--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-college-admin-faculties--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-college-admin-faculties--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-college-admin-faculties--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-college-admin-faculties--id-" data-method="PUT"
      data-path="api/college-admin/faculties/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-college-admin-faculties--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-college-admin-faculties--id-"
                    onclick="tryItOut('PUTapi-college-admin-faculties--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-college-admin-faculties--id-"
                    onclick="cancelTryOut('PUTapi-college-admin-faculties--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-college-admin-faculties--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/college-admin/faculties/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-college-admin-faculties--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-college-admin-faculties--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-college-admin-faculties--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the faculty. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>college_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="college_id"                data-endpoint="PUTapi-college-admin-faculties--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>department_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="department_id"                data-endpoint="PUTapi-college-admin-faculties--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>faculty_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="faculty_name"                data-endpoint="PUTapi-college-admin-faculties--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 191 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>faculty_designation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="faculty_designation"                data-endpoint="PUTapi-college-admin-faculties--id-"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 191 characters. Example: <code>g</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-college-admin-placements--id-">GET api/college-admin/placements/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-placements--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/college-admin/placements/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/placements/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-college-admin-placements--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-placements--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-placements--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-placements--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-placements--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-placements--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-placements--id-" data-method="GET"
      data-path="api/college-admin/placements/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-placements--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-placements--id-"
                    onclick="tryItOut('GETapi-college-admin-placements--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-placements--id-"
                    onclick="cancelTryOut('GETapi-college-admin-placements--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-placements--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/placements/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-placements--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-college-admin-placements--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-college-admin-placements--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the placement. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-college-admin-placements--id-">PUT api/college-admin/placements/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-college-admin-placements--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/college-admin/placements/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"high_package\": \"architecto\",
    \"avg_package\": \"architecto\",
    \"placement_description\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/placements/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "high_package": "architecto",
    "avg_package": "architecto",
    "placement_description": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-college-admin-placements--id-">
</span>
<span id="execution-results-PUTapi-college-admin-placements--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-college-admin-placements--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-college-admin-placements--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-college-admin-placements--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-college-admin-placements--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-college-admin-placements--id-" data-method="PUT"
      data-path="api/college-admin/placements/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-college-admin-placements--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-college-admin-placements--id-"
                    onclick="tryItOut('PUTapi-college-admin-placements--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-college-admin-placements--id-"
                    onclick="cancelTryOut('PUTapi-college-admin-placements--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-college-admin-placements--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/college-admin/placements/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-college-admin-placements--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-college-admin-placements--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-college-admin-placements--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the placement. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>high_package</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="high_package"                data-endpoint="PUTapi-college-admin-placements--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>avg_package</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="avg_package"                data-endpoint="PUTapi-college-admin-placements--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>placement_description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="placement_description"                data-endpoint="PUTapi-college-admin-placements--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-college-admin-articles">GET api/college-admin/articles</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-articles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/college-admin/articles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/articles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-college-admin-articles">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-articles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-articles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-articles"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-articles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-articles">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-articles" data-method="GET"
      data-path="api/college-admin/articles"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-articles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-articles"
                    onclick="tryItOut('GETapi-college-admin-articles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-articles"
                    onclick="cancelTryOut('GETapi-college-admin-articles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-articles"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/articles</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-articles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-college-admin-articles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-college-admin-courses">GET api/college-admin/courses</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-courses">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/college-admin/courses" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/courses"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-college-admin-courses">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-courses" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-courses"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-courses"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-courses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-courses">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-courses" data-method="GET"
      data-path="api/college-admin/courses"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-courses', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-courses"
                    onclick="tryItOut('GETapi-college-admin-courses');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-courses"
                    onclick="cancelTryOut('GETapi-college-admin-courses');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-courses"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/courses</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-courses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-college-admin-courses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-college-admin-courses--id-">GET api/college-admin/courses/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-courses--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/college-admin/courses/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/courses/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-college-admin-courses--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-courses--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-courses--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-courses--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-courses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-courses--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-courses--id-" data-method="GET"
      data-path="api/college-admin/courses/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-courses--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-courses--id-"
                    onclick="tryItOut('GETapi-college-admin-courses--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-courses--id-"
                    onclick="cancelTryOut('GETapi-college-admin-courses--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-courses--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/courses/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-courses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-college-admin-courses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-college-admin-courses--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the course. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-college-admin-courses--id-">PUT api/college-admin/courses/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-college-admin-courses--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/college-admin/courses/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"course_name\": \"architecto\",
    \"course_duration\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college-admin/courses/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "course_name": "architecto",
    "course_duration": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-college-admin-courses--id-">
</span>
<span id="execution-results-PUTapi-college-admin-courses--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-college-admin-courses--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-college-admin-courses--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-college-admin-courses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-college-admin-courses--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-college-admin-courses--id-" data-method="PUT"
      data-path="api/college-admin/courses/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-college-admin-courses--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-college-admin-courses--id-"
                    onclick="tryItOut('PUTapi-college-admin-courses--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-college-admin-courses--id-"
                    onclick="cancelTryOut('PUTapi-college-admin-courses--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-college-admin-courses--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/college-admin/courses/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-college-admin-courses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-college-admin-courses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-college-admin-courses--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the course. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>course_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="course_name"                data-endpoint="PUTapi-college-admin-courses--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>course_duration</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="course_duration"                data-endpoint="PUTapi-college-admin-courses--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-college-leads">GET api/college/leads</h2>

<p>
</p>



<span id="example-requests-GETapi-college-leads">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/college/leads" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college/leads"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-college-leads">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-leads" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-leads"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-leads"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-leads" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-leads">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-leads" data-method="GET"
      data-path="api/college/leads"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-leads', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-leads"
                    onclick="tryItOut('GETapi-college-leads');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-leads"
                    onclick="cancelTryOut('GETapi-college-leads');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-leads"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college/leads</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-leads"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-college-leads"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-college-leads--lead-">GET api/college/leads/{lead}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-leads--lead-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/college/leads/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college/leads/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-college-leads--lead-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-leads--lead-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-leads--lead-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-leads--lead-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-leads--lead-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-leads--lead-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-leads--lead-" data-method="GET"
      data-path="api/college/leads/{lead}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-leads--lead-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-leads--lead-"
                    onclick="tryItOut('GETapi-college-leads--lead-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-leads--lead-"
                    onclick="cancelTryOut('GETapi-college-leads--lead-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-leads--lead-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college/leads/{lead}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-leads--lead-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-college-leads--lead-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>lead</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lead"                data-endpoint="GETapi-college-leads--lead-"
               value="architecto"
               data-component="url">
    <br>
<p>The lead. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-college-leads--lead--remarks">GET api/college/leads/{lead}/remarks</h2>

<p>
</p>



<span id="example-requests-GETapi-college-leads--lead--remarks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/college/leads/architecto/remarks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college/leads/architecto/remarks"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-college-leads--lead--remarks">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-leads--lead--remarks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-leads--lead--remarks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-leads--lead--remarks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-leads--lead--remarks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-leads--lead--remarks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-leads--lead--remarks" data-method="GET"
      data-path="api/college/leads/{lead}/remarks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-leads--lead--remarks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-leads--lead--remarks"
                    onclick="tryItOut('GETapi-college-leads--lead--remarks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-leads--lead--remarks"
                    onclick="cancelTryOut('GETapi-college-leads--lead--remarks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-leads--lead--remarks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college/leads/{lead}/remarks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-leads--lead--remarks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-college-leads--lead--remarks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>lead</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lead"                data-endpoint="GETapi-college-leads--lead--remarks"
               value="architecto"
               data-component="url">
    <br>
<p>The lead. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-college-leads--lead--remarks">POST api/college/leads/{lead}/remarks</h2>

<p>
</p>



<span id="example-requests-POSTapi-college-leads--lead--remarks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/college/leads/architecto/remarks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/college/leads/architecto/remarks"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-college-leads--lead--remarks">
</span>
<span id="execution-results-POSTapi-college-leads--lead--remarks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-college-leads--lead--remarks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-college-leads--lead--remarks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-college-leads--lead--remarks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-college-leads--lead--remarks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-college-leads--lead--remarks" data-method="POST"
      data-path="api/college/leads/{lead}/remarks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-college-leads--lead--remarks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-college-leads--lead--remarks"
                    onclick="tryItOut('POSTapi-college-leads--lead--remarks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-college-leads--lead--remarks"
                    onclick="cancelTryOut('POSTapi-college-leads--lead--remarks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-college-leads--lead--remarks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/college/leads/{lead}/remarks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-college-leads--lead--remarks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-college-leads--lead--remarks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>lead</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lead"                data-endpoint="POSTapi-college-leads--lead--remarks"
               value="architecto"
               data-component="url">
    <br>
<p>The lead. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-colleges-submit">POST api/colleges/submit</h2>

<p>
</p>



<span id="example-requests-POSTapi-colleges-submit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/colleges/submit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"college_id\": \"architecto\",
    \"student_name\": \"architecto\",
    \"student_email\": \"architecto\",
    \"phone\": \"architecto\",
    \"course_id\": \"architecto\",
    \"state_id\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/colleges/submit"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "college_id": "architecto",
    "student_name": "architecto",
    "student_email": "architecto",
    "phone": "architecto",
    "course_id": "architecto",
    "state_id": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-colleges-submit">
</span>
<span id="execution-results-POSTapi-colleges-submit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-colleges-submit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-colleges-submit"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-colleges-submit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-colleges-submit">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-colleges-submit" data-method="POST"
      data-path="api/colleges/submit"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-colleges-submit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-colleges-submit"
                    onclick="tryItOut('POSTapi-colleges-submit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-colleges-submit"
                    onclick="cancelTryOut('POSTapi-colleges-submit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-colleges-submit"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/colleges/submit</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-colleges-submit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-colleges-submit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>college_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="college_id"                data-endpoint="POSTapi-colleges-submit"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>student_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="student_name"                data-endpoint="POSTapi-colleges-submit"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>student_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="student_email"                data-endpoint="POSTapi-colleges-submit"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-colleges-submit"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>course_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="course_id"                data-endpoint="POSTapi-colleges-submit"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>state_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="state_id"                data-endpoint="POSTapi-colleges-submit"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-colleges-claim">POST api/colleges/claim</h2>

<p>
</p>



<span id="example-requests-POSTapi-colleges-claim">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/colleges/claim" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"college_id\": \"architecto\",
    \"name\": \"architecto\",
    \"official_email\": \"architecto\",
    \"phone\": \"architecto\",
    \"designation\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/colleges/claim"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "college_id": "architecto",
    "name": "architecto",
    "official_email": "architecto",
    "phone": "architecto",
    "designation": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-colleges-claim">
</span>
<span id="execution-results-POSTapi-colleges-claim" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-colleges-claim"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-colleges-claim"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-colleges-claim" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-colleges-claim">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-colleges-claim" data-method="POST"
      data-path="api/colleges/claim"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-colleges-claim', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-colleges-claim"
                    onclick="tryItOut('POSTapi-colleges-claim');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-colleges-claim"
                    onclick="cancelTryOut('POSTapi-colleges-claim');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-colleges-claim"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/colleges/claim</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-colleges-claim"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-colleges-claim"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>college_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="college_id"                data-endpoint="POSTapi-colleges-claim"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-colleges-claim"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>official_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="official_email"                data-endpoint="POSTapi-colleges-claim"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-colleges-claim"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>designation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="designation"                data-endpoint="POSTapi-colleges-claim"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-colleges-search--key-">GET api/colleges/search/{key}</h2>

<p>
</p>



<span id="example-requests-GETapi-colleges-search--key-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/colleges/search/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/colleges/search/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-colleges-search--key-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [],
    &quot;message&quot;: &quot;College List&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-colleges-search--key-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-colleges-search--key-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-colleges-search--key-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-colleges-search--key-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-colleges-search--key-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-colleges-search--key-" data-method="GET"
      data-path="api/colleges/search/{key}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-colleges-search--key-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-colleges-search--key-"
                    onclick="tryItOut('GETapi-colleges-search--key-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-colleges-search--key-"
                    onclick="cancelTryOut('GETapi-colleges-search--key-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-colleges-search--key-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/colleges/search/{key}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-colleges-search--key-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-colleges-search--key-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>key</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="key"                data-endpoint="GETapi-colleges-search--key-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-colleges">GET api/colleges</h2>

<p>
</p>



<span id="example-requests-GETapi-colleges">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/colleges" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/colleges"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-colleges">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;fghfg&quot;,
            &quot;slug&quot;: &quot;fghfg&quot;,
            &quot;college_logo&quot;: &quot;logo/iXBcBLpH2ZIRJeEM47wlBkEncgH2QGdsImDks9AU.png&quot;,
            &quot;college_about&quot;: &quot;dfftfjfyjuk&quot;,
            &quot;institute_type&quot;: 1,
            &quot;is_verify&quot;: 1,
            &quot;lead_model&quot;: 1,
            &quot;created_at&quot;: &quot;2024-12-09T04:25:32.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-01-21T23:33:27.000000Z&quot;,
            &quot;logo_image_path&quot;: &quot;http://localhost:8000/storage/logo/iXBcBLpH2ZIRJeEM47wlBkEncgH2QGdsImDks9AU.png&quot;,
            &quot;college_address&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;college_address&quot;: &quot;Saltlake Sector V&quot;,
                    &quot;pincode&quot;: &quot;700125&quot;,
                    &quot;college_id&quot;: 1,
                    &quot;state_id&quot;: 28,
                    &quot;district_id&quot;: 488,
                    &quot;city&quot;: &quot;Kolkata&quot;,
                    &quot;email&quot;: &quot;arvin@it.com&quot;,
                    &quot;created_at&quot;: &quot;2025-02-13T04:31:00.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-02-13T04:31:00.000000Z&quot;
                }
            ],
            &quot;college_course_department&quot;: [
                {
                    &quot;id&quot;: 13,
                    &quot;college_id&quot;: 1,
                    &quot;department_id&quot;: 2,
                    &quot;course_id&quot;: 1,
                    &quot;eligibility&quot;: &quot;12th pass&quot;,
                    &quot;created_at&quot;: &quot;2025-02-13T04:31:47.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-02-13T04:31:47.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;King&quot;,
            &quot;slug&quot;: &quot;king&quot;,
            &quot;college_logo&quot;: &quot;logo/WAzFCDpg1HO3X8rp7CVzqSN69TE5fdMxNZ0L1jCB.png&quot;,
            &quot;college_about&quot;: &quot;hvbh&quot;,
            &quot;institute_type&quot;: 1,
            &quot;is_verify&quot;: 0,
            &quot;lead_model&quot;: 1,
            &quot;created_at&quot;: &quot;2024-12-11T04:17:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-01-24T00:25:37.000000Z&quot;,
            &quot;logo_image_path&quot;: &quot;http://localhost:8000/storage/logo/WAzFCDpg1HO3X8rp7CVzqSN69TE5fdMxNZ0L1jCB.png&quot;,
            &quot;college_address&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;college_address&quot;: &quot;Kathalia&quot;,
                    &quot;pincode&quot;: &quot;700118&quot;,
                    &quot;college_id&quot;: 2,
                    &quot;state_id&quot;: 13,
                    &quot;district_id&quot;: 258,
                    &quot;city&quot;: &quot;Bangalore&quot;,
                    &quot;email&quot;: &quot;arv.bh@jj.com&quot;,
                    &quot;created_at&quot;: &quot;2024-12-11T05:28:39.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-01-14T02:10:39.000000Z&quot;
                }
            ],
            &quot;college_course_department&quot;: []
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;kpc&quot;,
            &quot;slug&quot;: &quot;kpc&quot;,
            &quot;college_logo&quot;: &quot;logo/BgX9rHoDfQAoWnyeDPl1EejxNtHiSBc4LQnJNDZG.svg&quot;,
            &quot;college_about&quot;: &quot;jkkjkjkjk&quot;,
            &quot;institute_type&quot;: 1,
            &quot;is_verify&quot;: 0,
            &quot;lead_model&quot;: 1,
            &quot;created_at&quot;: &quot;2024-12-12T02:13:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-12-12T02:13:15.000000Z&quot;,
            &quot;logo_image_path&quot;: &quot;http://localhost:8000/storage/logo/BgX9rHoDfQAoWnyeDPl1EejxNtHiSBc4LQnJNDZG.svg&quot;,
            &quot;college_address&quot;: [
                {
                    &quot;id&quot;: 6,
                    &quot;college_address&quot;: &quot;Barasat Kajibari Berunanpukuria&quot;,
                    &quot;pincode&quot;: &quot;700118&quot;,
                    &quot;college_id&quot;: 3,
                    &quot;state_id&quot;: 28,
                    &quot;district_id&quot;: 488,
                    &quot;city&quot;: &quot;Kolkata&quot;,
                    &quot;email&quot;: &quot;abc@gmail.com&quot;,
                    &quot;created_at&quot;: &quot;2025-02-12T00:36:25.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-02-12T00:39:54.000000Z&quot;
                }
            ],
            &quot;college_course_department&quot;: [
                {
                    &quot;id&quot;: 11,
                    &quot;college_id&quot;: 3,
                    &quot;department_id&quot;: 13,
                    &quot;course_id&quot;: 4,
                    &quot;eligibility&quot;: &quot;10th pass&quot;,
                    &quot;created_at&quot;: &quot;2025-02-12T00:23:18.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-02-12T00:23:18.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;LOU&quot;,
            &quot;slug&quot;: &quot;lou&quot;,
            &quot;college_logo&quot;: &quot;logo/WQsDHNC7RdfQvbQEBIjd9DjzJTKVtwZrqaQX9nfa.png&quot;,
            &quot;college_about&quot;: &quot;dfvtbt&quot;,
            &quot;institute_type&quot;: 2,
            &quot;is_verify&quot;: 1,
            &quot;lead_model&quot;: 1,
            &quot;created_at&quot;: &quot;2024-12-14T02:39:39.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-01-21T23:33:39.000000Z&quot;,
            &quot;logo_image_path&quot;: &quot;http://localhost:8000/storage/logo/WQsDHNC7RdfQvbQEBIjd9DjzJTKVtwZrqaQX9nfa.png&quot;,
            &quot;college_address&quot;: [
                {
                    &quot;id&quot;: 8,
                    &quot;college_address&quot;: &quot;Abc&quot;,
                    &quot;pincode&quot;: &quot;700129&quot;,
                    &quot;college_id&quot;: 4,
                    &quot;state_id&quot;: 28,
                    &quot;district_id&quot;: 486,
                    &quot;city&quot;: &quot;Kolkata&quot;,
                    &quot;email&quot;: &quot;def@gmail.com&quot;,
                    &quot;created_at&quot;: &quot;2025-02-12T00:42:04.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-02-12T00:42:04.000000Z&quot;
                }
            ],
            &quot;college_course_department&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;college_id&quot;: 4,
                    &quot;department_id&quot;: 4,
                    &quot;course_id&quot;: 2,
                    &quot;eligibility&quot;: null,
                    &quot;created_at&quot;: &quot;2024-12-14T02:39:50.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-01-14T02:26:15.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;asas&quot;,
            &quot;slug&quot;: &quot;asas&quot;,
            &quot;college_logo&quot;: &quot;logo/S3VNETOVQNLebjmWJEDLeZsINhhW85uFRJQTuMQZ.png&quot;,
            &quot;college_about&quot;: &quot;asxdas&quot;,
            &quot;institute_type&quot;: 1,
            &quot;is_verify&quot;: 0,
            &quot;lead_model&quot;: 1,
            &quot;created_at&quot;: &quot;2024-12-16T01:17:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-12-16T01:17:11.000000Z&quot;,
            &quot;logo_image_path&quot;: &quot;http://localhost:8000/storage/logo/S3VNETOVQNLebjmWJEDLeZsINhhW85uFRJQTuMQZ.png&quot;,
            &quot;college_address&quot;: [],
            &quot;college_course_department&quot;: []
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;triber&quot;,
            &quot;slug&quot;: &quot;triber&quot;,
            &quot;college_logo&quot;: &quot;logo/fBb3VYya2iq1XHYSRur0a0ogKCWKpFaVMXLriguj.png&quot;,
            &quot;college_about&quot;: &quot;abc&quot;,
            &quot;institute_type&quot;: 1,
            &quot;is_verify&quot;: 0,
            &quot;lead_model&quot;: 1,
            &quot;created_at&quot;: &quot;2025-01-16T01:25:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-01-21T23:33:47.000000Z&quot;,
            &quot;logo_image_path&quot;: &quot;http://localhost:8000/storage/logo/fBb3VYya2iq1XHYSRur0a0ogKCWKpFaVMXLriguj.png&quot;,
            &quot;college_address&quot;: [
                {
                    &quot;id&quot;: 9,
                    &quot;college_address&quot;: &quot;Howrah&quot;,
                    &quot;pincode&quot;: &quot;700125&quot;,
                    &quot;college_id&quot;: 6,
                    &quot;state_id&quot;: 28,
                    &quot;district_id&quot;: 488,
                    &quot;city&quot;: &quot;Kolkata&quot;,
                    &quot;email&quot;: &quot;abc@gmail.com&quot;,
                    &quot;created_at&quot;: &quot;2025-02-12T00:42:46.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-02-12T00:42:46.000000Z&quot;
                }
            ],
            &quot;college_course_department&quot;: [
                {
                    &quot;id&quot;: 12,
                    &quot;college_id&quot;: 6,
                    &quot;department_id&quot;: 1,
                    &quot;course_id&quot;: 1,
                    &quot;eligibility&quot;: &quot;12th pass&quot;,
                    &quot;created_at&quot;: &quot;2025-02-12T00:43:30.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-02-12T00:43:30.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Career and courses&quot;,
            &quot;slug&quot;: &quot;career-and-courses&quot;,
            &quot;college_logo&quot;: null,
            &quot;college_about&quot;: &quot;ghgjkgju&quot;,
            &quot;institute_type&quot;: 1,
            &quot;is_verify&quot;: 0,
            &quot;lead_model&quot;: 2,
            &quot;created_at&quot;: &quot;2025-01-22T01:12:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-01-22T01:12:03.000000Z&quot;,
            &quot;logo_image_path&quot;: &quot;http://localhost:8000/storage&quot;,
            &quot;college_address&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;college_address&quot;: &quot;Bara kathalia&quot;,
                    &quot;pincode&quot;: &quot;700121&quot;,
                    &quot;college_id&quot;: 7,
                    &quot;state_id&quot;: 28,
                    &quot;district_id&quot;: 488,
                    &quot;city&quot;: &quot;Kolkata&quot;,
                    &quot;email&quot;: &quot;arv.bh@jj.com&quot;,
                    &quot;created_at&quot;: &quot;2025-01-22T01:12:44.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-01-22T01:12:44.000000Z&quot;
                }
            ],
            &quot;college_course_department&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;college_id&quot;: 7,
                    &quot;department_id&quot;: 1,
                    &quot;course_id&quot;: 1,
                    &quot;eligibility&quot;: null,
                    &quot;created_at&quot;: &quot;2025-01-22T01:13:15.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-01-22T01:13:15.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;Swami Vivekananda University&quot;,
            &quot;slug&quot;: &quot;swami-vivekananda-university&quot;,
            &quot;college_logo&quot;: null,
            &quot;college_about&quot;: &quot;SVU Uni&quot;,
            &quot;institute_type&quot;: 2,
            &quot;is_verify&quot;: 1,
            &quot;lead_model&quot;: 2,
            &quot;created_at&quot;: &quot;2025-01-24T01:11:32.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-02-14T23:44:17.000000Z&quot;,
            &quot;logo_image_path&quot;: &quot;http://localhost:8000/storage&quot;,
            &quot;college_address&quot;: [],
            &quot;college_course_department&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;college_id&quot;: 8,
                    &quot;department_id&quot;: 1,
                    &quot;course_id&quot;: 1,
                    &quot;eligibility&quot;: null,
                    &quot;created_at&quot;: &quot;2025-01-24T01:11:44.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-01-24T01:11:44.000000Z&quot;
                },
                {
                    &quot;id&quot;: 4,
                    &quot;college_id&quot;: 8,
                    &quot;department_id&quot;: 3,
                    &quot;course_id&quot;: 1,
                    &quot;eligibility&quot;: &quot;10 th pass&quot;,
                    &quot;created_at&quot;: &quot;2025-01-24T01:11:50.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-01-24T23:41:09.000000Z&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;college_id&quot;: 8,
                    &quot;department_id&quot;: 9,
                    &quot;course_id&quot;: 1,
                    &quot;eligibility&quot;: &quot;10th pass 61%&quot;,
                    &quot;created_at&quot;: &quot;2025-01-24T01:12:04.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-01-24T23:24:12.000000Z&quot;
                },
                {
                    &quot;id&quot;: 6,
                    &quot;college_id&quot;: 8,
                    &quot;department_id&quot;: 1,
                    &quot;course_id&quot;: 1,
                    &quot;eligibility&quot;: &quot;12th pass 60%&quot;,
                    &quot;created_at&quot;: &quot;2025-01-24T01:55:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-01-24T01:55:53.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;R C C Institute of technology&quot;,
            &quot;slug&quot;: &quot;r-c-c-institute-of-technology&quot;,
            &quot;college_logo&quot;: null,
            &quot;college_about&quot;: &quot;asasas&quot;,
            &quot;institute_type&quot;: 1,
            &quot;is_verify&quot;: 0,
            &quot;lead_model&quot;: 2,
            &quot;created_at&quot;: &quot;2025-01-24T23:36:30.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-01-24T23:36:30.000000Z&quot;,
            &quot;logo_image_path&quot;: &quot;http://localhost:8000/storage&quot;,
            &quot;college_address&quot;: [],
            &quot;college_course_department&quot;: []
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;Adamas University&quot;,
            &quot;slug&quot;: &quot;adamas-university&quot;,
            &quot;college_logo&quot;: null,
            &quot;college_about&quot;: &quot;ghgh&quot;,
            &quot;institute_type&quot;: 2,
            &quot;is_verify&quot;: 0,
            &quot;lead_model&quot;: 2,
            &quot;created_at&quot;: &quot;2025-01-26T23:38:55.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-01-26T23:38:55.000000Z&quot;,
            &quot;logo_image_path&quot;: &quot;http://localhost:8000/storage&quot;,
            &quot;college_address&quot;: [],
            &quot;college_course_department&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;college_id&quot;: 10,
                    &quot;department_id&quot;: 1,
                    &quot;course_id&quot;: 1,
                    &quot;eligibility&quot;: &quot;12th pass 45%&quot;,
                    &quot;created_at&quot;: &quot;2025-01-26T23:39:40.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-01-26T23:39:40.000000Z&quot;
                },
                {
                    &quot;id&quot;: 8,
                    &quot;college_id&quot;: 10,
                    &quot;department_id&quot;: 1,
                    &quot;course_id&quot;: 2,
                    &quot;eligibility&quot;: &quot;12th pass&quot;,
                    &quot;created_at&quot;: &quot;2025-01-26T23:50:32.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-01-26T23:50:32.000000Z&quot;
                },
                {
                    &quot;id&quot;: 10,
                    &quot;college_id&quot;: 10,
                    &quot;department_id&quot;: 9,
                    &quot;course_id&quot;: 1,
                    &quot;eligibility&quot;: &quot;class 8 pass&quot;,
                    &quot;created_at&quot;: &quot;2025-01-27T02:02:33.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-01-27T02:02:33.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;Dream Institute of Technology&quot;,
            &quot;slug&quot;: &quot;dream-institute-of-technology&quot;,
            &quot;college_logo&quot;: null,
            &quot;college_about&quot;: &quot;dream&quot;,
            &quot;institute_type&quot;: 1,
            &quot;is_verify&quot;: 0,
            &quot;lead_model&quot;: 1,
            &quot;created_at&quot;: &quot;2025-02-18T05:22:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-02-18T05:22:20.000000Z&quot;,
            &quot;logo_image_path&quot;: &quot;http://localhost:8000/storage&quot;,
            &quot;college_address&quot;: [],
            &quot;college_course_department&quot;: []
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;Amity University&quot;,
            &quot;slug&quot;: &quot;amity-university&quot;,
            &quot;college_logo&quot;: null,
            &quot;college_about&quot;: &quot;sese&quot;,
            &quot;institute_type&quot;: 1,
            &quot;is_verify&quot;: 0,
            &quot;lead_model&quot;: 1,
            &quot;created_at&quot;: &quot;2025-02-19T02:18:25.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-02-19T02:18:25.000000Z&quot;,
            &quot;logo_image_path&quot;: &quot;http://localhost:8000/storage&quot;,
            &quot;college_address&quot;: [],
            &quot;college_course_department&quot;: []
        },
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;test &quot;,
            &quot;slug&quot;: &quot;test&quot;,
            &quot;college_logo&quot;: &quot;logo/JNocMD9rL4colvS5gGT46vnSUj9FI7t90zYFqNEN.webp&quot;,
            &quot;college_about&quot;: &quot;scsc&quot;,
            &quot;institute_type&quot;: 1,
            &quot;is_verify&quot;: 0,
            &quot;lead_model&quot;: 1,
            &quot;created_at&quot;: &quot;2025-02-24T11:21:41.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-02-25T07:34:31.000000Z&quot;,
            &quot;logo_image_path&quot;: &quot;http://localhost:8000/storage/logo/JNocMD9rL4colvS5gGT46vnSUj9FI7t90zYFqNEN.webp&quot;,
            &quot;college_address&quot;: [
                {
                    &quot;id&quot;: 11,
                    &quot;college_address&quot;: &quot;cscsc&quot;,
                    &quot;pincode&quot;: &quot;123456&quot;,
                    &quot;college_id&quot;: 14,
                    &quot;state_id&quot;: 16,
                    &quot;district_id&quot;: 403,
                    &quot;city&quot;: &quot;Hyderbad&quot;,
                    &quot;email&quot;: &quot;sssddsbsb@ssdsd.dd&quot;,
                    &quot;created_at&quot;: &quot;2025-02-24T11:22:01.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-02-24T11:22:01.000000Z&quot;
                }
            ],
            &quot;college_course_department&quot;: [
                {
                    &quot;id&quot;: 14,
                    &quot;college_id&quot;: 14,
                    &quot;department_id&quot;: 2,
                    &quot;course_id&quot;: 1,
                    &quot;eligibility&quot;: &quot;fe&quot;,
                    &quot;created_at&quot;: &quot;2025-02-24T11:22:15.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-02-24T11:22:15.000000Z&quot;
                }
            ]
        }
    ],
    &quot;message&quot;: &quot;College List&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-colleges" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-colleges"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-colleges"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-colleges" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-colleges">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-colleges" data-method="GET"
      data-path="api/colleges"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-colleges', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-colleges"
                    onclick="tryItOut('GETapi-colleges');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-colleges"
                    onclick="cancelTryOut('GETapi-colleges');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-colleges"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/colleges</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-colleges"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-colleges"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-colleges--college_slug-">GET api/colleges/{college_slug}</h2>

<p>
</p>



<span id="example-requests-GETapi-colleges--college_slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/colleges/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/colleges/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-colleges--college_slug-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;College not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-colleges--college_slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-colleges--college_slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-colleges--college_slug-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-colleges--college_slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-colleges--college_slug-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-colleges--college_slug-" data-method="GET"
      data-path="api/colleges/{college_slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-colleges--college_slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-colleges--college_slug-"
                    onclick="tryItOut('GETapi-colleges--college_slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-colleges--college_slug-"
                    onclick="cancelTryOut('GETapi-colleges--college_slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-colleges--college_slug-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/colleges/{college_slug}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-colleges--college_slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-colleges--college_slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>college_slug</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="college_slug"                data-endpoint="GETapi-colleges--college_slug-"
               value="1"
               data-component="url">
    <br>
<p>The slug of the college. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-colleges--college_id--address">GET api/colleges/{college_id}/address</h2>

<p>
</p>



<span id="example-requests-GETapi-colleges--college_id--address">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/colleges/1/address" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/colleges/1/address"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-colleges--college_id--address">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 10,
        &quot;college_address&quot;: &quot;Saltlake Sector V&quot;,
        &quot;pincode&quot;: &quot;700125&quot;,
        &quot;college_id&quot;: 1,
        &quot;state_id&quot;: 28,
        &quot;district_id&quot;: 488,
        &quot;city&quot;: &quot;Kolkata&quot;,
        &quot;email&quot;: &quot;arvin@it.com&quot;,
        &quot;created_at&quot;: &quot;2025-02-13T04:31:00.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-02-13T04:31:00.000000Z&quot;
    },
    &quot;message&quot;: &quot;College address details fetched successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-colleges--college_id--address" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-colleges--college_id--address"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-colleges--college_id--address"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-colleges--college_id--address" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-colleges--college_id--address">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-colleges--college_id--address" data-method="GET"
      data-path="api/colleges/{college_id}/address"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-colleges--college_id--address', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-colleges--college_id--address"
                    onclick="tryItOut('GETapi-colleges--college_id--address');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-colleges--college_id--address"
                    onclick="cancelTryOut('GETapi-colleges--college_id--address');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-colleges--college_id--address"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/colleges/{college_id}/address</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-colleges--college_id--address"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-colleges--college_id--address"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>college_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="college_id"                data-endpoint="GETapi-colleges--college_id--address"
               value="1"
               data-component="url">
    <br>
<p>The ID of the college. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-colleges--college_id--course-fees-department">GET api/colleges/{college_id}/course-fees-department</h2>

<p>
</p>



<span id="example-requests-GETapi-colleges--college_id--course-fees-department">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/colleges/1/course-fees-department" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/colleges/1/course-fees-department"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-colleges--college_id--course-fees-department">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 13,
        &quot;college_id&quot;: 1,
        &quot;department_id&quot;: 2,
        &quot;course_id&quot;: 1,
        &quot;eligibility&quot;: &quot;12th pass&quot;,
        &quot;created_at&quot;: &quot;2025-02-13T04:31:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-02-13T04:31:47.000000Z&quot;,
        &quot;college&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;fghfg&quot;,
            &quot;slug&quot;: &quot;fghfg&quot;,
            &quot;college_logo&quot;: &quot;logo/iXBcBLpH2ZIRJeEM47wlBkEncgH2QGdsImDks9AU.png&quot;,
            &quot;college_about&quot;: &quot;dfftfjfyjuk&quot;,
            &quot;institute_type&quot;: 1,
            &quot;is_verify&quot;: 1,
            &quot;lead_model&quot;: 1,
            &quot;created_at&quot;: &quot;2024-12-09T04:25:32.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-01-21T23:33:27.000000Z&quot;
        },
        &quot;course&quot;: {
            &quot;id&quot;: 1,
            &quot;course_name&quot;: &quot;B. Tech&quot;,
            &quot;course_slug&quot;: &quot;b-tech&quot;,
            &quot;course_duration&quot;: &quot;4&quot;,
            &quot;course_category_id&quot;: null,
            &quot;created_at&quot;: &quot;2024-11-28T23:29:31.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-11-29T00:08:09.000000Z&quot;
        },
        &quot;department&quot;: {
            &quot;id&quot;: 2,
            &quot;department_name&quot;: &quot;Electrical &quot;,
            &quot;department_slug&quot;: &quot;electrical&quot;,
            &quot;created_at&quot;: &quot;2024-12-03T01:53:25.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-01-24T01:53:44.000000Z&quot;
        },
        &quot;fees&quot;: {
            &quot;id&quot;: 10,
            &quot;college_course_fee_id&quot;: 13,
            &quot;fees&quot;: &quot;1 lakh&quot;,
            &quot;created_at&quot;: &quot;2025-02-13T04:31:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-02-13T04:31:47.000000Z&quot;
        }
    },
    &quot;message&quot;: &quot;College course department details fetched successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-colleges--college_id--course-fees-department" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-colleges--college_id--course-fees-department"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-colleges--college_id--course-fees-department"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-colleges--college_id--course-fees-department" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-colleges--college_id--course-fees-department">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-colleges--college_id--course-fees-department" data-method="GET"
      data-path="api/colleges/{college_id}/course-fees-department"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-colleges--college_id--course-fees-department', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-colleges--college_id--course-fees-department"
                    onclick="tryItOut('GETapi-colleges--college_id--course-fees-department');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-colleges--college_id--course-fees-department"
                    onclick="cancelTryOut('GETapi-colleges--college_id--course-fees-department');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-colleges--college_id--course-fees-department"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/colleges/{college_id}/course-fees-department</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-colleges--college_id--course-fees-department"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-colleges--college_id--course-fees-department"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>college_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="college_id"                data-endpoint="GETapi-colleges--college_id--course-fees-department"
               value="1"
               data-component="url">
    <br>
<p>The ID of the college. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-colleges--college_id--faculty">GET api/colleges/{college_id}/faculty</h2>

<p>
</p>



<span id="example-requests-GETapi-colleges--college_id--faculty">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/colleges/1/faculty" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/colleges/1/faculty"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-colleges--college_id--faculty">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 7,
            &quot;college_id&quot;: 1,
            &quot;department_id&quot;: 2,
            &quot;faculty_name&quot;: &quot;Ankur Warikoo&quot;,
            &quot;faculty_designation&quot;: &quot;Asst Professor&quot;,
            &quot;created_at&quot;: &quot;2025-02-13T04:33:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-02-13T04:33:08.000000Z&quot;,
            &quot;department&quot;: {
                &quot;id&quot;: 2,
                &quot;department_name&quot;: &quot;Electrical &quot;,
                &quot;department_slug&quot;: &quot;electrical&quot;,
                &quot;created_at&quot;: &quot;2024-12-03T01:53:25.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-01-24T01:53:44.000000Z&quot;
            }
        }
    ],
    &quot;message&quot;: &quot;College faculty details fetched successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-colleges--college_id--faculty" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-colleges--college_id--faculty"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-colleges--college_id--faculty"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-colleges--college_id--faculty" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-colleges--college_id--faculty">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-colleges--college_id--faculty" data-method="GET"
      data-path="api/colleges/{college_id}/faculty"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-colleges--college_id--faculty', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-colleges--college_id--faculty"
                    onclick="tryItOut('GETapi-colleges--college_id--faculty');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-colleges--college_id--faculty"
                    onclick="cancelTryOut('GETapi-colleges--college_id--faculty');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-colleges--college_id--faculty"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/colleges/{college_id}/faculty</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-colleges--college_id--faculty"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-colleges--college_id--faculty"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>college_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="college_id"                data-endpoint="GETapi-colleges--college_id--faculty"
               value="1"
               data-component="url">
    <br>
<p>The ID of the college. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
