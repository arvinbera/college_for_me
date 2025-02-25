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
        var tryItOutBaseUrl = "http://localhost";
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
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-collegeadmin-login">
                                <a href="#endpoints-POSTapi-collegeadmin-login">College Admin Login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-collegeadmin-logout">
                                <a href="#endpoints-POSTapi-collegeadmin-logout">POST api/collegeadmin/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-verify-user--token-">
                                <a href="#endpoints-GETapi-verify-user--token-">GET api/verify-user/{token}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-college-info--id-">
                                <a href="#endpoints-GETapi-college-admin-college-info--id-">GET api/college-admin/college/info/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-college-edit--id-">
                                <a href="#endpoints-GETapi-college-admin-college-edit--id-">GET api/college-admin/college/edit/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-college-admin-college-update--id-">
                                <a href="#endpoints-POSTapi-college-admin-college-update--id-">POST api/college-admin/college/update/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-contact-edit--id-">
                                <a href="#endpoints-GETapi-college-admin-contact-edit--id-">GET api/college-admin/contact/edit/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-college-admin-contact-update--id-">
                                <a href="#endpoints-POSTapi-college-admin-contact-update--id-">POST api/college-admin/contact/update/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-gallery-edit--id-">
                                <a href="#endpoints-GETapi-college-admin-gallery-edit--id-">GET api/college-admin/gallery/edit/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-college-admin-gallery-update--id-">
                                <a href="#endpoints-POSTapi-college-admin-gallery-update--id-">POST api/college-admin/gallery/update/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-faculty-list">
                                <a href="#endpoints-GETapi-college-admin-faculty-list">GET api/college-admin/faculty/list</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-faculty-edit--id-">
                                <a href="#endpoints-GETapi-college-admin-faculty-edit--id-">GET api/college-admin/faculty/edit/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-college-admin-faculty-update--id-">
                                <a href="#endpoints-POSTapi-college-admin-faculty-update--id-">POST api/college-admin/faculty/update/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-placement-edit--id-">
                                <a href="#endpoints-GETapi-college-admin-placement-edit--id-">GET api/college-admin/placement/edit/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-college-admin-placement-update--id-">
                                <a href="#endpoints-POSTapi-college-admin-placement-update--id-">POST api/college-admin/placement/update/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-article-list">
                                <a href="#endpoints-GETapi-college-admin-article-list">GET api/college-admin/article/list</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-course-edit--id-">
                                <a href="#endpoints-GETapi-college-admin-course-edit--id-">GET api/college-admin/course/edit/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-college-admin-course-update--id-">
                                <a href="#endpoints-POSTapi-college-admin-course-update--id-">POST api/college-admin/course/update/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-admin-course-list">
                                <a href="#endpoints-GETapi-college-admin-course-list">GET api/college-admin/course/list</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-lead-list">
                                <a href="#endpoints-GETapi-college-lead-list">GET api/college/lead/list</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-lead-details--lead_id-">
                                <a href="#endpoints-GETapi-college-lead-details--lead_id-">GET api/college/lead/details/{lead_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-college-lead-remark-submit">
                                <a href="#endpoints-POSTapi-college-lead-remark-submit">POST api/college/lead/remark/submit</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-lead-remark-list--lead_id-">
                                <a href="#endpoints-GETapi-college-lead-remark-list--lead_id-">GET api/college/lead/remark/list/{lead_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-college-submit">
                                <a href="#endpoints-POSTapi-college-submit">POST api/college/submit</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-college-claim">
                                <a href="#endpoints-POSTapi-college-claim">POST api/college/claim</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college-search--key-">
                                <a href="#endpoints-GETapi-college-search--key-">GET api/college/search/{key}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-colleges">
                                <a href="#endpoints-GETapi-colleges">GET api/colleges</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college--college_id--info">
                                <a href="#endpoints-GETapi-college--college_id--info">GET api/college/{college_id}/info</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college--college_id--address">
                                <a href="#endpoints-GETapi-college--college_id--address">GET api/college/{college_id}/address</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college--college_id--course-department">
                                <a href="#endpoints-GETapi-college--college_id--course-department">GET api/college/{college_id}/course-department</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-college--college_id--faculty">
                                <a href="#endpoints-GETapi-college--college_id--faculty">GET api/college/{college_id}/faculty</a>
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
        <li>Last updated: February 24, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-collegeadmin-login">College Admin Login</h2>

<p>
</p>



<span id="example-requests-POSTapi-collegeadmin-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/collegeadmin/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"+-0pBNvYgxwmi\\/#iw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/collegeadmin/login"
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

<span id="example-responses-POSTapi-collegeadmin-login">
</span>
<span id="execution-results-POSTapi-collegeadmin-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-collegeadmin-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-collegeadmin-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-collegeadmin-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-collegeadmin-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-collegeadmin-login" data-method="POST"
      data-path="api/collegeadmin/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-collegeadmin-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-collegeadmin-login"
                    onclick="tryItOut('POSTapi-collegeadmin-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-collegeadmin-login"
                    onclick="cancelTryOut('POSTapi-collegeadmin-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-collegeadmin-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/collegeadmin/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-collegeadmin-login"
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
                              name="Accept"                data-endpoint="POSTapi-collegeadmin-login"
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
                              name="email"                data-endpoint="POSTapi-collegeadmin-login"
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
                              name="password"                data-endpoint="POSTapi-collegeadmin-login"
               value="+-0pBNvYgxwmi/#iw"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Example: <code>+-0pBNvYgxwmi/#iw</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-collegeadmin-logout">POST api/collegeadmin/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-collegeadmin-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/collegeadmin/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/collegeadmin/logout"
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

<span id="example-responses-POSTapi-collegeadmin-logout">
</span>
<span id="execution-results-POSTapi-collegeadmin-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-collegeadmin-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-collegeadmin-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-collegeadmin-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-collegeadmin-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-collegeadmin-logout" data-method="POST"
      data-path="api/collegeadmin/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-collegeadmin-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-collegeadmin-logout"
                    onclick="tryItOut('POSTapi-collegeadmin-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-collegeadmin-logout"
                    onclick="cancelTryOut('POSTapi-collegeadmin-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-collegeadmin-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/collegeadmin/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-collegeadmin-logout"
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
                              name="Accept"                data-endpoint="POSTapi-collegeadmin-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-verify-user--token-">GET api/verify-user/{token}</h2>

<p>
</p>



<span id="example-requests-GETapi-verify-user--token-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/verify-user/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/verify-user/architecto"
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

<span id="example-responses-GETapi-verify-user--token-">
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
<span id="execution-results-GETapi-verify-user--token-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-verify-user--token-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-verify-user--token-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-verify-user--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-verify-user--token-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-verify-user--token-" data-method="GET"
      data-path="api/verify-user/{token}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-verify-user--token-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-verify-user--token-"
                    onclick="tryItOut('GETapi-verify-user--token-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-verify-user--token-"
                    onclick="cancelTryOut('GETapi-verify-user--token-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-verify-user--token-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/verify-user/{token}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-verify-user--token-"
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
                              name="Accept"                data-endpoint="GETapi-verify-user--token-"
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
                              name="token"                data-endpoint="GETapi-verify-user--token-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-college-admin-college-info--id-">GET api/college-admin/college/info/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-college-info--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college-admin/college/info/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college-admin/college/info/architecto"
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

<span id="example-responses-GETapi-college-admin-college-info--id-">
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
    &quot;data&quot;: null,
    &quot;message&quot;: &quot;College details fetched successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-college-info--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-college-info--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-college-info--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-college-info--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-college-info--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-college-info--id-" data-method="GET"
      data-path="api/college-admin/college/info/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-college-info--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-college-info--id-"
                    onclick="tryItOut('GETapi-college-admin-college-info--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-college-info--id-"
                    onclick="cancelTryOut('GETapi-college-admin-college-info--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-college-info--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/college/info/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-college-info--id-"
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
                              name="Accept"                data-endpoint="GETapi-college-admin-college-info--id-"
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
                              name="id"                data-endpoint="GETapi-college-admin-college-info--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the info. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-college-admin-college-edit--id-">GET api/college-admin/college/edit/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-college-edit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college-admin/college/edit/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college-admin/college/edit/architecto"
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

<span id="example-responses-GETapi-college-admin-college-edit--id-">
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
    &quot;message&quot;: &quot;No such records founds&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-college-edit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-college-edit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-college-edit--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-college-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-college-edit--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-college-edit--id-" data-method="GET"
      data-path="api/college-admin/college/edit/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-college-edit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-college-edit--id-"
                    onclick="tryItOut('GETapi-college-admin-college-edit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-college-edit--id-"
                    onclick="cancelTryOut('GETapi-college-admin-college-edit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-college-edit--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/college/edit/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-college-edit--id-"
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
                              name="Accept"                data-endpoint="GETapi-college-admin-college-edit--id-"
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
                              name="id"                data-endpoint="GETapi-college-admin-college-edit--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the edit. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-college-admin-college-update--id-">POST api/college-admin/college/update/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-college-admin-college-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/college-admin/college/update/architecto" \
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
    "http://localhost/api/college-admin/college/update/architecto"
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
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-college-admin-college-update--id-">
</span>
<span id="execution-results-POSTapi-college-admin-college-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-college-admin-college-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-college-admin-college-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-college-admin-college-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-college-admin-college-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-college-admin-college-update--id-" data-method="POST"
      data-path="api/college-admin/college/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-college-admin-college-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-college-admin-college-update--id-"
                    onclick="tryItOut('POSTapi-college-admin-college-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-college-admin-college-update--id-"
                    onclick="cancelTryOut('POSTapi-college-admin-college-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-college-admin-college-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/college-admin/college/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-college-admin-college-update--id-"
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
                              name="Accept"                data-endpoint="POSTapi-college-admin-college-update--id-"
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
                              name="id"                data-endpoint="POSTapi-college-admin-college-update--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-college-admin-college-update--id-"
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
                              name="college_about"                data-endpoint="POSTapi-college-admin-college-update--id-"
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
                              name="institute_type"                data-endpoint="POSTapi-college-admin-college-update--id-"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 191 characters. Example: <code>g</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-college-admin-contact-edit--id-">GET api/college-admin/contact/edit/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-contact-edit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college-admin/contact/edit/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college-admin/contact/edit/architecto"
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

<span id="example-responses-GETapi-college-admin-contact-edit--id-">
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
    &quot;message&quot;: &quot;No such records founds&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-contact-edit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-contact-edit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-contact-edit--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-contact-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-contact-edit--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-contact-edit--id-" data-method="GET"
      data-path="api/college-admin/contact/edit/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-contact-edit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-contact-edit--id-"
                    onclick="tryItOut('GETapi-college-admin-contact-edit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-contact-edit--id-"
                    onclick="cancelTryOut('GETapi-college-admin-contact-edit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-contact-edit--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/contact/edit/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-contact-edit--id-"
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
                              name="Accept"                data-endpoint="GETapi-college-admin-contact-edit--id-"
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
                              name="id"                data-endpoint="GETapi-college-admin-contact-edit--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the edit. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-college-admin-contact-update--id-">POST api/college-admin/contact/update/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-college-admin-contact-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/college-admin/contact/update/architecto" \
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
    "http://localhost/api/college-admin/contact/update/architecto"
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
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-college-admin-contact-update--id-">
</span>
<span id="execution-results-POSTapi-college-admin-contact-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-college-admin-contact-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-college-admin-contact-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-college-admin-contact-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-college-admin-contact-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-college-admin-contact-update--id-" data-method="POST"
      data-path="api/college-admin/contact/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-college-admin-contact-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-college-admin-contact-update--id-"
                    onclick="tryItOut('POSTapi-college-admin-contact-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-college-admin-contact-update--id-"
                    onclick="cancelTryOut('POSTapi-college-admin-contact-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-college-admin-contact-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/college-admin/contact/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-college-admin-contact-update--id-"
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
                              name="Accept"                data-endpoint="POSTapi-college-admin-contact-update--id-"
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
                              name="id"                data-endpoint="POSTapi-college-admin-contact-update--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>college_address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="college_address"                data-endpoint="POSTapi-college-admin-contact-update--id-"
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
                              name="pincode"                data-endpoint="POSTapi-college-admin-contact-update--id-"
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
                              name="college_id"                data-endpoint="POSTapi-college-admin-contact-update--id-"
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
                              name="state_id"                data-endpoint="POSTapi-college-admin-contact-update--id-"
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
                              name="district_id"                data-endpoint="POSTapi-college-admin-contact-update--id-"
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
                              name="city"                data-endpoint="POSTapi-college-admin-contact-update--id-"
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
                              name="email"                data-endpoint="POSTapi-college-admin-contact-update--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-college-admin-gallery-edit--id-">GET api/college-admin/gallery/edit/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-gallery-edit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college-admin/gallery/edit/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college-admin/gallery/edit/architecto"
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

<span id="example-responses-GETapi-college-admin-gallery-edit--id-">
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
    &quot;message&quot;: &quot;NO such records found !&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-gallery-edit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-gallery-edit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-gallery-edit--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-gallery-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-gallery-edit--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-gallery-edit--id-" data-method="GET"
      data-path="api/college-admin/gallery/edit/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-gallery-edit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-gallery-edit--id-"
                    onclick="tryItOut('GETapi-college-admin-gallery-edit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-gallery-edit--id-"
                    onclick="cancelTryOut('GETapi-college-admin-gallery-edit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-gallery-edit--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/gallery/edit/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-gallery-edit--id-"
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
                              name="Accept"                data-endpoint="GETapi-college-admin-gallery-edit--id-"
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
                              name="id"                data-endpoint="GETapi-college-admin-gallery-edit--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the edit. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-college-admin-gallery-update--id-">POST api/college-admin/gallery/update/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-college-admin-gallery-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/college-admin/gallery/update/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"college_image\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college-admin/gallery/update/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "college_image": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-college-admin-gallery-update--id-">
</span>
<span id="execution-results-POSTapi-college-admin-gallery-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-college-admin-gallery-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-college-admin-gallery-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-college-admin-gallery-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-college-admin-gallery-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-college-admin-gallery-update--id-" data-method="POST"
      data-path="api/college-admin/gallery/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-college-admin-gallery-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-college-admin-gallery-update--id-"
                    onclick="tryItOut('POSTapi-college-admin-gallery-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-college-admin-gallery-update--id-"
                    onclick="cancelTryOut('POSTapi-college-admin-gallery-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-college-admin-gallery-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/college-admin/gallery/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-college-admin-gallery-update--id-"
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
                              name="Accept"                data-endpoint="POSTapi-college-admin-gallery-update--id-"
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
                              name="id"                data-endpoint="POSTapi-college-admin-gallery-update--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>college_image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="college_image"                data-endpoint="POSTapi-college-admin-gallery-update--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-college-admin-faculty-list">GET api/college-admin/faculty/list</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-faculty-list">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college-admin/faculty/list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college-admin/faculty/list"
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

<span id="example-responses-GETapi-college-admin-faculty-list">
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
            &quot;college_id&quot;: 3,
            &quot;department_id&quot;: 2,
            &quot;faculty_name&quot;: &quot;nunnjunjunju&quot;,
            &quot;faculty_designation&quot;: null,
            &quot;created_at&quot;: &quot;2024-12-12T02:13:39.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-12-12T02:13:39.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;college_id&quot;: 3,
            &quot;department_id&quot;: 1,
            &quot;faculty_name&quot;: &quot;Dr. Krishna Kanta Maity&quot;,
            &quot;faculty_designation&quot;: &quot;Associate Prof&quot;,
            &quot;created_at&quot;: &quot;2024-12-12T02:15:26.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-01-15T02:06:38.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;college_id&quot;: 7,
            &quot;department_id&quot;: 1,
            &quot;faculty_name&quot;: &quot;Molay Giri&quot;,
            &quot;faculty_designation&quot;: &quot;Asst Proff&quot;,
            &quot;created_at&quot;: &quot;2025-01-22T01:14:00.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-01-22T01:14:00.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;college_id&quot;: 10,
            &quot;department_id&quot;: 1,
            &quot;faculty_name&quot;: &quot;Molay Kr Giri&quot;,
            &quot;faculty_designation&quot;: &quot;Lecturer&quot;,
            &quot;created_at&quot;: &quot;2025-01-27T03:31:17.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-01-27T03:31:17.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;college_id&quot;: 3,
            &quot;department_id&quot;: 1,
            &quot;faculty_name&quot;: &quot;Mr. Sovonesh Paul&quot;,
            &quot;faculty_designation&quot;: &quot;HOD&quot;,
            &quot;created_at&quot;: &quot;2025-02-12T00:23:51.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-02-12T00:23:51.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;college_id&quot;: 2,
            &quot;department_id&quot;: 1,
            &quot;faculty_name&quot;: &quot;Subhasish Mukherjee&quot;,
            &quot;faculty_designation&quot;: &quot;Asst Professor&quot;,
            &quot;created_at&quot;: &quot;2025-02-12T00:59:38.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-02-12T00:59:38.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;college_id&quot;: 1,
            &quot;department_id&quot;: 2,
            &quot;faculty_name&quot;: &quot;Ankur Warikoo&quot;,
            &quot;faculty_designation&quot;: &quot;Asst Professor&quot;,
            &quot;created_at&quot;: &quot;2025-02-13T04:33:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-02-13T04:33:08.000000Z&quot;
        }
    ],
    &quot;message&quot;: &quot;Records fetch successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-faculty-list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-faculty-list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-faculty-list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-faculty-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-faculty-list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-faculty-list" data-method="GET"
      data-path="api/college-admin/faculty/list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-faculty-list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-faculty-list"
                    onclick="tryItOut('GETapi-college-admin-faculty-list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-faculty-list"
                    onclick="cancelTryOut('GETapi-college-admin-faculty-list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-faculty-list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/faculty/list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-faculty-list"
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
                              name="Accept"                data-endpoint="GETapi-college-admin-faculty-list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-college-admin-faculty-edit--id-">GET api/college-admin/faculty/edit/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-faculty-edit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college-admin/faculty/edit/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college-admin/faculty/edit/architecto"
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

<span id="example-responses-GETapi-college-admin-faculty-edit--id-">
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
    &quot;message&quot;: &quot;No such records founds&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-faculty-edit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-faculty-edit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-faculty-edit--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-faculty-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-faculty-edit--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-faculty-edit--id-" data-method="GET"
      data-path="api/college-admin/faculty/edit/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-faculty-edit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-faculty-edit--id-"
                    onclick="tryItOut('GETapi-college-admin-faculty-edit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-faculty-edit--id-"
                    onclick="cancelTryOut('GETapi-college-admin-faculty-edit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-faculty-edit--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/faculty/edit/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-faculty-edit--id-"
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
                              name="Accept"                data-endpoint="GETapi-college-admin-faculty-edit--id-"
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
                              name="id"                data-endpoint="GETapi-college-admin-faculty-edit--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the edit. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-college-admin-faculty-update--id-">POST api/college-admin/faculty/update/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-college-admin-faculty-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/college-admin/faculty/update/architecto" \
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
    "http://localhost/api/college-admin/faculty/update/architecto"
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
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-college-admin-faculty-update--id-">
</span>
<span id="execution-results-POSTapi-college-admin-faculty-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-college-admin-faculty-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-college-admin-faculty-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-college-admin-faculty-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-college-admin-faculty-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-college-admin-faculty-update--id-" data-method="POST"
      data-path="api/college-admin/faculty/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-college-admin-faculty-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-college-admin-faculty-update--id-"
                    onclick="tryItOut('POSTapi-college-admin-faculty-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-college-admin-faculty-update--id-"
                    onclick="cancelTryOut('POSTapi-college-admin-faculty-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-college-admin-faculty-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/college-admin/faculty/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-college-admin-faculty-update--id-"
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
                              name="Accept"                data-endpoint="POSTapi-college-admin-faculty-update--id-"
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
                              name="id"                data-endpoint="POSTapi-college-admin-faculty-update--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>college_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="college_id"                data-endpoint="POSTapi-college-admin-faculty-update--id-"
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
                              name="department_id"                data-endpoint="POSTapi-college-admin-faculty-update--id-"
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
                              name="faculty_name"                data-endpoint="POSTapi-college-admin-faculty-update--id-"
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
                              name="faculty_designation"                data-endpoint="POSTapi-college-admin-faculty-update--id-"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 191 characters. Example: <code>g</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-college-admin-placement-edit--id-">GET api/college-admin/placement/edit/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-placement-edit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college-admin/placement/edit/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college-admin/placement/edit/architecto"
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

<span id="example-responses-GETapi-college-admin-placement-edit--id-">
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
    &quot;error&quot;: {
        &quot;message&quot;: &quot;NO such records found !&quot;
    },
    &quot;statusCode&quot;: 404
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-placement-edit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-placement-edit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-placement-edit--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-placement-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-placement-edit--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-placement-edit--id-" data-method="GET"
      data-path="api/college-admin/placement/edit/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-placement-edit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-placement-edit--id-"
                    onclick="tryItOut('GETapi-college-admin-placement-edit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-placement-edit--id-"
                    onclick="cancelTryOut('GETapi-college-admin-placement-edit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-placement-edit--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/placement/edit/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-placement-edit--id-"
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
                              name="Accept"                data-endpoint="GETapi-college-admin-placement-edit--id-"
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
                              name="id"                data-endpoint="GETapi-college-admin-placement-edit--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the edit. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-college-admin-placement-update--id-">POST api/college-admin/placement/update/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-college-admin-placement-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/college-admin/placement/update/architecto" \
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
    "http://localhost/api/college-admin/placement/update/architecto"
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
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-college-admin-placement-update--id-">
</span>
<span id="execution-results-POSTapi-college-admin-placement-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-college-admin-placement-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-college-admin-placement-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-college-admin-placement-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-college-admin-placement-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-college-admin-placement-update--id-" data-method="POST"
      data-path="api/college-admin/placement/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-college-admin-placement-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-college-admin-placement-update--id-"
                    onclick="tryItOut('POSTapi-college-admin-placement-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-college-admin-placement-update--id-"
                    onclick="cancelTryOut('POSTapi-college-admin-placement-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-college-admin-placement-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/college-admin/placement/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-college-admin-placement-update--id-"
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
                              name="Accept"                data-endpoint="POSTapi-college-admin-placement-update--id-"
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
                              name="id"                data-endpoint="POSTapi-college-admin-placement-update--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>high_package</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="high_package"                data-endpoint="POSTapi-college-admin-placement-update--id-"
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
                              name="avg_package"                data-endpoint="POSTapi-college-admin-placement-update--id-"
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
                              name="placement_description"                data-endpoint="POSTapi-college-admin-placement-update--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-college-admin-article-list">GET api/college-admin/article/list</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-article-list">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college-admin/article/list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college-admin/article/list"
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

<span id="example-responses-GETapi-college-admin-article-list">
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
            &quot;title&quot;: &quot;Today&#039;s News Headlines for School Assembly: 28 January 2025&quot;,
            &quot;article_slug&quot;: &quot;new-head-line&quot;,
            &quot;banner_image&quot;: &quot;o1ihobe7ga8occs04ggcow4s8owo4og.png&quot;,
            &quot;meta_description&quot;: &quot;yvyvyvyvyuu[opo&quot;,
            &quot;article_category_id&quot;: 1,
            &quot;article_description&quot;: &quot;&lt;h1 class=\&quot;blog-details__title\&quot; style=\&quot;margin-top: 0px; margin-bottom: 18px; font-family: Gordita; font-weight: 700; line-height: 1.42; color: rgb(37, 37, 37); font-size: 28px;\&quot;&gt;Today&#039;s News Headlines for School Assembly: 28 January 2025&lt;/h1&gt;&lt;p style=\&quot;margin-bottom: 1rem;\&quot;&gt;&lt;span style=\&quot;background-color: transparent;\&quot;&gt;News Headlines for School Assembly for 28 January 2025: Welcome to today&#039;s news update for school assembly, where we bring you the latest in national and international news in a concise format. Here are today&#039;s news headlines in English for school assembly, perfect for delivering in 10 lines of today&#039;s news headlines. This roundup covers today&#039;s national news headlines in English alongside key international news for school assembly, keeping students informed and engaged with current events.&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;p style=\&quot;margin-bottom: 1rem;\&quot;&gt;&lt;br style=\&quot;color: rgb(51, 51, 51); font-family: Gordita, Arial, Helvetica, sans-serif;\&quot;&gt;&lt;/p&gt;&quot;,
            &quot;created_at&quot;: &quot;2025-01-27T04:12:58.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-01-27T04:24:15.000000Z&quot;
        }
    ],
    &quot;statusCode&quot;: 200,
    &quot;message&quot;: &quot;Records fetch successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-article-list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-article-list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-article-list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-article-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-article-list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-article-list" data-method="GET"
      data-path="api/college-admin/article/list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-article-list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-article-list"
                    onclick="tryItOut('GETapi-college-admin-article-list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-article-list"
                    onclick="cancelTryOut('GETapi-college-admin-article-list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-article-list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/article/list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-article-list"
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
                              name="Accept"                data-endpoint="GETapi-college-admin-article-list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-college-admin-course-edit--id-">GET api/college-admin/course/edit/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-course-edit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college-admin/course/edit/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college-admin/course/edit/architecto"
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

<span id="example-responses-GETapi-college-admin-course-edit--id-">
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
    &quot;error&quot;: {
        &quot;message&quot;: &quot;NO such records found !&quot;
    },
    &quot;statusCode&quot;: 404
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-course-edit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-course-edit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-course-edit--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-course-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-course-edit--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-course-edit--id-" data-method="GET"
      data-path="api/college-admin/course/edit/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-course-edit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-course-edit--id-"
                    onclick="tryItOut('GETapi-college-admin-course-edit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-course-edit--id-"
                    onclick="cancelTryOut('GETapi-college-admin-course-edit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-course-edit--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/course/edit/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-course-edit--id-"
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
                              name="Accept"                data-endpoint="GETapi-college-admin-course-edit--id-"
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
                              name="id"                data-endpoint="GETapi-college-admin-course-edit--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the edit. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-college-admin-course-update--id-">POST api/college-admin/course/update/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-college-admin-course-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/college-admin/course/update/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"course_name\": \"architecto\",
    \"course_duration\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college-admin/course/update/architecto"
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
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-college-admin-course-update--id-">
</span>
<span id="execution-results-POSTapi-college-admin-course-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-college-admin-course-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-college-admin-course-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-college-admin-course-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-college-admin-course-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-college-admin-course-update--id-" data-method="POST"
      data-path="api/college-admin/course/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-college-admin-course-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-college-admin-course-update--id-"
                    onclick="tryItOut('POSTapi-college-admin-course-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-college-admin-course-update--id-"
                    onclick="cancelTryOut('POSTapi-college-admin-course-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-college-admin-course-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/college-admin/course/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-college-admin-course-update--id-"
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
                              name="Accept"                data-endpoint="POSTapi-college-admin-course-update--id-"
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
                              name="id"                data-endpoint="POSTapi-college-admin-course-update--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>course_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="course_name"                data-endpoint="POSTapi-college-admin-course-update--id-"
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
                              name="course_duration"                data-endpoint="POSTapi-college-admin-course-update--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-college-admin-course-list">GET api/college-admin/course/list</h2>

<p>
</p>



<span id="example-requests-GETapi-college-admin-course-list">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college-admin/course/list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college-admin/course/list"
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

<span id="example-responses-GETapi-college-admin-course-list">
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
    &quot;college_faculty&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;course_name&quot;: &quot;B. Tech&quot;,
            &quot;course_slug&quot;: &quot;b-tech&quot;,
            &quot;course_duration&quot;: &quot;4&quot;,
            &quot;course_category_id&quot;: null,
            &quot;created_at&quot;: &quot;2024-11-28T23:29:31.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-11-29T00:08:09.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;course_name&quot;: &quot;M. Tech&quot;,
            &quot;course_slug&quot;: &quot;m-tech&quot;,
            &quot;course_duration&quot;: &quot;3&quot;,
            &quot;course_category_id&quot;: null,
            &quot;created_at&quot;: &quot;2024-11-28T23:35:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-11-29T00:07:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;course_name&quot;: &quot;MCA&quot;,
            &quot;course_slug&quot;: &quot;mca&quot;,
            &quot;course_duration&quot;: &quot;2&quot;,
            &quot;course_category_id&quot;: null,
            &quot;created_at&quot;: &quot;2024-12-02T05:34:17.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-12-02T05:34:17.000000Z&quot;
        }
    ],
    &quot;statusCode&quot;: 200,
    &quot;message&quot;: &quot;Records fetch successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-admin-course-list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-admin-course-list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-admin-course-list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-admin-course-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-admin-course-list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-admin-course-list" data-method="GET"
      data-path="api/college-admin/course/list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-admin-course-list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-admin-course-list"
                    onclick="tryItOut('GETapi-college-admin-course-list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-admin-course-list"
                    onclick="cancelTryOut('GETapi-college-admin-course-list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-admin-course-list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college-admin/course/list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-admin-course-list"
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
                              name="Accept"                data-endpoint="GETapi-college-admin-course-list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-college-lead-list">GET api/college/lead/list</h2>

<p>
</p>



<span id="example-requests-GETapi-college-lead-list">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college/lead/list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college/lead/list"
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

<span id="example-responses-GETapi-college-lead-list">
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
<span id="execution-results-GETapi-college-lead-list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-lead-list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-lead-list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-lead-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-lead-list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-lead-list" data-method="GET"
      data-path="api/college/lead/list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-lead-list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-lead-list"
                    onclick="tryItOut('GETapi-college-lead-list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-lead-list"
                    onclick="cancelTryOut('GETapi-college-lead-list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-lead-list"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college/lead/list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-lead-list"
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
                              name="Accept"                data-endpoint="GETapi-college-lead-list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-college-lead-details--lead_id-">GET api/college/lead/details/{lead_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-lead-details--lead_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college/lead/details/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college/lead/details/architecto"
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

<span id="example-responses-GETapi-college-lead-details--lead_id-">
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
<span id="execution-results-GETapi-college-lead-details--lead_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-lead-details--lead_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-lead-details--lead_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-lead-details--lead_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-lead-details--lead_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-lead-details--lead_id-" data-method="GET"
      data-path="api/college/lead/details/{lead_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-lead-details--lead_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-lead-details--lead_id-"
                    onclick="tryItOut('GETapi-college-lead-details--lead_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-lead-details--lead_id-"
                    onclick="cancelTryOut('GETapi-college-lead-details--lead_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-lead-details--lead_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college/lead/details/{lead_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-lead-details--lead_id-"
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
                              name="Accept"                data-endpoint="GETapi-college-lead-details--lead_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>lead_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lead_id"                data-endpoint="GETapi-college-lead-details--lead_id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the lead. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-college-lead-remark-submit">POST api/college/lead/remark/submit</h2>

<p>
</p>



<span id="example-requests-POSTapi-college-lead-remark-submit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/college/lead/remark/submit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college/lead/remark/submit"
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

<span id="example-responses-POSTapi-college-lead-remark-submit">
</span>
<span id="execution-results-POSTapi-college-lead-remark-submit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-college-lead-remark-submit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-college-lead-remark-submit"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-college-lead-remark-submit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-college-lead-remark-submit">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-college-lead-remark-submit" data-method="POST"
      data-path="api/college/lead/remark/submit"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-college-lead-remark-submit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-college-lead-remark-submit"
                    onclick="tryItOut('POSTapi-college-lead-remark-submit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-college-lead-remark-submit"
                    onclick="cancelTryOut('POSTapi-college-lead-remark-submit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-college-lead-remark-submit"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/college/lead/remark/submit</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-college-lead-remark-submit"
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
                              name="Accept"                data-endpoint="POSTapi-college-lead-remark-submit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-college-lead-remark-list--lead_id-">GET api/college/lead/remark/list/{lead_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-lead-remark-list--lead_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college/lead/remark/list/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college/lead/remark/list/architecto"
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

<span id="example-responses-GETapi-college-lead-remark-list--lead_id-">
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
<span id="execution-results-GETapi-college-lead-remark-list--lead_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-lead-remark-list--lead_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-lead-remark-list--lead_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-lead-remark-list--lead_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-lead-remark-list--lead_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-lead-remark-list--lead_id-" data-method="GET"
      data-path="api/college/lead/remark/list/{lead_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-lead-remark-list--lead_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-lead-remark-list--lead_id-"
                    onclick="tryItOut('GETapi-college-lead-remark-list--lead_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-lead-remark-list--lead_id-"
                    onclick="cancelTryOut('GETapi-college-lead-remark-list--lead_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-lead-remark-list--lead_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college/lead/remark/list/{lead_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-lead-remark-list--lead_id-"
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
                              name="Accept"                data-endpoint="GETapi-college-lead-remark-list--lead_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>lead_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lead_id"                data-endpoint="GETapi-college-lead-remark-list--lead_id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the lead. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-college-submit">POST api/college/submit</h2>

<p>
</p>



<span id="example-requests-POSTapi-college-submit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/college/submit" \
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
    "http://localhost/api/college/submit"
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

<span id="example-responses-POSTapi-college-submit">
</span>
<span id="execution-results-POSTapi-college-submit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-college-submit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-college-submit"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-college-submit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-college-submit">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-college-submit" data-method="POST"
      data-path="api/college/submit"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-college-submit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-college-submit"
                    onclick="tryItOut('POSTapi-college-submit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-college-submit"
                    onclick="cancelTryOut('POSTapi-college-submit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-college-submit"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/college/submit</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-college-submit"
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
                              name="Accept"                data-endpoint="POSTapi-college-submit"
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
                              name="college_id"                data-endpoint="POSTapi-college-submit"
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
                              name="student_name"                data-endpoint="POSTapi-college-submit"
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
                              name="student_email"                data-endpoint="POSTapi-college-submit"
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
                              name="phone"                data-endpoint="POSTapi-college-submit"
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
                              name="course_id"                data-endpoint="POSTapi-college-submit"
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
                              name="state_id"                data-endpoint="POSTapi-college-submit"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-college-claim">POST api/college/claim</h2>

<p>
</p>



<span id="example-requests-POSTapi-college-claim">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/college/claim" \
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
    "http://localhost/api/college/claim"
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

<span id="example-responses-POSTapi-college-claim">
</span>
<span id="execution-results-POSTapi-college-claim" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-college-claim"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-college-claim"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-college-claim" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-college-claim">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-college-claim" data-method="POST"
      data-path="api/college/claim"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-college-claim', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-college-claim"
                    onclick="tryItOut('POSTapi-college-claim');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-college-claim"
                    onclick="cancelTryOut('POSTapi-college-claim');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-college-claim"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/college/claim</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-college-claim"
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
                              name="Accept"                data-endpoint="POSTapi-college-claim"
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
                              name="college_id"                data-endpoint="POSTapi-college-claim"
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
                              name="name"                data-endpoint="POSTapi-college-claim"
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
                              name="official_email"                data-endpoint="POSTapi-college-claim"
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
                              name="phone"                data-endpoint="POSTapi-college-claim"
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
                              name="designation"                data-endpoint="POSTapi-college-claim"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-college-search--key-">GET api/college/search/{key}</h2>

<p>
</p>



<span id="example-requests-GETapi-college-search--key-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college/search/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college/search/architecto"
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

<span id="example-responses-GETapi-college-search--key-">
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
    &quot;is_success&quot;: true,
    &quot;data&quot;: [],
    &quot;message&quot;: &quot;College List&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college-search--key-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college-search--key-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college-search--key-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college-search--key-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college-search--key-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college-search--key-" data-method="GET"
      data-path="api/college/search/{key}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college-search--key-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college-search--key-"
                    onclick="tryItOut('GETapi-college-search--key-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college-search--key-"
                    onclick="cancelTryOut('GETapi-college-search--key-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college-search--key-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college/search/{key}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college-search--key-"
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
                              name="Accept"                data-endpoint="GETapi-college-search--key-"
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
                              name="key"                data-endpoint="GETapi-college-search--key-"
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
    --get "http://localhost/api/colleges" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/colleges"
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
    &quot;is_success&quot;: true,
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
            &quot;college_address&quot;: [],
            &quot;college_course_department&quot;: []
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

                    <h2 id="endpoints-GETapi-college--college_id--info">GET api/college/{college_id}/info</h2>

<p>
</p>



<span id="example-requests-GETapi-college--college_id--info">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college/1/info" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college/1/info"
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

<span id="example-responses-GETapi-college--college_id--info">
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
    &quot;message&quot;: &quot;College details fetched successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-college--college_id--info" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college--college_id--info"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college--college_id--info"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college--college_id--info" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college--college_id--info">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college--college_id--info" data-method="GET"
      data-path="api/college/{college_id}/info"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college--college_id--info', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college--college_id--info"
                    onclick="tryItOut('GETapi-college--college_id--info');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college--college_id--info"
                    onclick="cancelTryOut('GETapi-college--college_id--info');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college--college_id--info"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college/{college_id}/info</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college--college_id--info"
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
                              name="Accept"                data-endpoint="GETapi-college--college_id--info"
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
               step="any"               name="college_id"                data-endpoint="GETapi-college--college_id--info"
               value="1"
               data-component="url">
    <br>
<p>The ID of the college. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-college--college_id--address">GET api/college/{college_id}/address</h2>

<p>
</p>



<span id="example-requests-GETapi-college--college_id--address">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college/1/address" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college/1/address"
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

<span id="example-responses-GETapi-college--college_id--address">
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
<span id="execution-results-GETapi-college--college_id--address" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college--college_id--address"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college--college_id--address"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college--college_id--address" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college--college_id--address">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college--college_id--address" data-method="GET"
      data-path="api/college/{college_id}/address"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college--college_id--address', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college--college_id--address"
                    onclick="tryItOut('GETapi-college--college_id--address');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college--college_id--address"
                    onclick="cancelTryOut('GETapi-college--college_id--address');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college--college_id--address"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college/{college_id}/address</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college--college_id--address"
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
                              name="Accept"                data-endpoint="GETapi-college--college_id--address"
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
               step="any"               name="college_id"                data-endpoint="GETapi-college--college_id--address"
               value="1"
               data-component="url">
    <br>
<p>The ID of the college. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-college--college_id--course-department">GET api/college/{college_id}/course-department</h2>

<p>
</p>



<span id="example-requests-GETapi-college--college_id--course-department">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college/1/course-department" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college/1/course-department"
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

<span id="example-responses-GETapi-college--college_id--course-department">
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
<span id="execution-results-GETapi-college--college_id--course-department" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college--college_id--course-department"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college--college_id--course-department"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college--college_id--course-department" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college--college_id--course-department">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college--college_id--course-department" data-method="GET"
      data-path="api/college/{college_id}/course-department"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college--college_id--course-department', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college--college_id--course-department"
                    onclick="tryItOut('GETapi-college--college_id--course-department');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college--college_id--course-department"
                    onclick="cancelTryOut('GETapi-college--college_id--course-department');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college--college_id--course-department"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college/{college_id}/course-department</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college--college_id--course-department"
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
                              name="Accept"                data-endpoint="GETapi-college--college_id--course-department"
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
               step="any"               name="college_id"                data-endpoint="GETapi-college--college_id--course-department"
               value="1"
               data-component="url">
    <br>
<p>The ID of the college. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-college--college_id--faculty">GET api/college/{college_id}/faculty</h2>

<p>
</p>



<span id="example-requests-GETapi-college--college_id--faculty">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/college/1/faculty" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/college/1/faculty"
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

<span id="example-responses-GETapi-college--college_id--faculty">
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
<span id="execution-results-GETapi-college--college_id--faculty" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-college--college_id--faculty"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-college--college_id--faculty"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-college--college_id--faculty" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-college--college_id--faculty">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-college--college_id--faculty" data-method="GET"
      data-path="api/college/{college_id}/faculty"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-college--college_id--faculty', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-college--college_id--faculty"
                    onclick="tryItOut('GETapi-college--college_id--faculty');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-college--college_id--faculty"
                    onclick="cancelTryOut('GETapi-college--college_id--faculty');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-college--college_id--faculty"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/college/{college_id}/faculty</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-college--college_id--faculty"
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
                              name="Accept"                data-endpoint="GETapi-college--college_id--faculty"
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
               step="any"               name="college_id"                data-endpoint="GETapi-college--college_id--faculty"
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
