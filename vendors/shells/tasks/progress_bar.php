
    

  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <title>vendors/shells/tasks/progress_bar.php at master from mcurry's progress_bar - GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="http://github.com/fluidicon.png" title="GitHub" />

    <link href="http://assets3.github.com/stylesheets/bundle_common.css?0260fd09e4addb5b7e5793ab932ea40995810234" media="screen" rel="stylesheet" type="text/css" />
<link href="http://assets2.github.com/stylesheets/bundle_github.css?0260fd09e4addb5b7e5793ab932ea40995810234" media="screen" rel="stylesheet" type="text/css" />

    <script type="text/javascript" charset="utf-8">
      var GitHub = {}
      var github_user = 'sassman'
      
    </script>
    <script src="http://assets0.github.com/javascripts/jquery/jquery-1.4.2.min.js?0260fd09e4addb5b7e5793ab932ea40995810234" type="text/javascript"></script>
    <script src="http://assets1.github.com/javascripts/bundle_common.js?0260fd09e4addb5b7e5793ab932ea40995810234" type="text/javascript"></script>
<script src="http://assets1.github.com/javascripts/bundle_github.js?0260fd09e4addb5b7e5793ab932ea40995810234" type="text/javascript"></script>

        <script type="text/javascript" charset="utf-8">
      GitHub.spy({
        repo: "mcurry/progress_bar"
      })
    </script>

    
  
    
  

  <link href="http://github.com/mcurry/progress_bar/commits/master.atom" rel="alternate" title="Recent Commits to progress_bar:master" type="application/atom+xml" />

        <meta name="description" content="CakePHP shell task for creating a simple progress bar" />
    <script type="text/javascript">
      GitHub.nameWithOwner = GitHub.nameWithOwner || "mcurry/progress_bar";
      GitHub.currentRef = 'master';
    </script>
  

            <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-3769691-2']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script');
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        ga.setAttribute('async', 'true');
        document.documentElement.firstChild.appendChild(ga);
      })();
    </script>

  </head>

  

  <body class="logged_in ">
    

    
      <script type="text/javascript">
        var _kmq = _kmq || [];
        function _kms(u){
          var s = document.createElement('script'); var f = document.getElementsByTagName('script')[0]; s.type = 'text/javascript'; s.async = true;
          s.src = u; f.parentNode.insertBefore(s, f);
        }
        _kms('//i.kissmetrics.com/i.js');_kms('//doug1izaerwt3.cloudfront.net/406e8bf3a2b8846ead55afb3cfaf6664523e3a54.1.js');
      </script>
    

    

    

    

    <div class="subnavd" id="main">
      <div id="header" class="true">
        
          <a class="logo boring" href="https://github.com/">
            <img src="/images/modules/header/logov3.png?changed" class="default" alt="github" />
            <![if !IE]>
            <img src="/images/modules/header/logov3-hover.png" class="hover" alt="github" />
            <![endif]>
          </a>
        
        
          






  
    <div class="userbox">
      <div class="avatarname">
        <a href="http://github.com/sassman"><img src="https://secure.gravatar.com/avatar/0779413b522c7cd9238a20fcd794e58d?s=140&d=https%3A%2F%2Fgithub.com%2Fimages%2Fgravatars%2Fgravatar-140.png" alt="" width="20" height="20"  /></a>
        <a href="http://github.com/sassman" class="name">sassman</a>

        
        
          <a href="http://github.com/inbox/notifications" class="unread_count notifications_count new tooltipped downwards js-notification-count" title="Unread Notifications">1</a>
        
      </div>
      <ul class="usernav">
        <li><a href="https://github.com/">Dashboard</a></li>
        <li>
          
          <a href="https://github.com/inbox">Inbox</a>
          <a href="https://github.com/inbox" class="unread_count ">0</a>
        </li>
        <li><a href="https://github.com/account">Account Settings</a></li>
                        <li><a href="/logout">Log Out</a></li>
      </ul>
    </div><!-- /.userbox -->
  


        
        <div class="topsearch">
  
    <form action="/search" id="top_search_form" method="get">
      <a href="/search" class="advanced-search tooltipped downwards" title="Advanced Search">Advanced Search</a>
      <input type="search" class="search my_repos_autocompleter" name="q" results="5" placeholder="Search&hellip;" /> <input type="submit" value="Search" class="button" />
      <input type="hidden" name="type" value="Everything" />
      <input type="hidden" name="repo" value="" />
      <input type="hidden" name="langOverride" value="" />
      <input type="hidden" name="start_value" value="1" />
    </form>
    <ul class="nav">
      <li><a href="/explore">Explore GitHub</a></li>
      <li><a href="http://gist.github.com">Gist</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="http://help.github.com">Help</a></li>
    </ul>
  
</div>

      </div>

      
      
        
    <div class="site">
      <div class="pagehead repohead vis-public   ">

      

      <div class="title-actions-bar">
        <h1>
          <a href="/mcurry">mcurry</a> / <strong><a href="http://github.com/mcurry/progress_bar">progress_bar</a></strong>
          
          
        </h1>

        
    <ul class="actions">
      

      
        <li class="for-owner" style="display:none"><a href="https://github.com/mcurry/progress_bar/edit" class="minibutton btn-admin "><span><span class="icon"></span>Admin</span></a></li>
        <li>
          <a href="/mcurry/progress_bar/toggle_watch" class="minibutton btn-watch " id="watch_button" onclick="var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'db88def4cfee8937af2bd0f11777ba578a629ced'); f.appendChild(s);f.submit();return false;" style="display:none"><span><span class="icon"></span>Watch</span></a>
          <a href="/mcurry/progress_bar/toggle_watch" class="minibutton btn-watch " id="unwatch_button" onclick="var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'db88def4cfee8937af2bd0f11777ba578a629ced'); f.appendChild(s);f.submit();return false;" style="display:none"><span><span class="icon"></span>Unwatch</span></a>
        </li>
        
          
            <li class="for-notforked"><a href="#fork_box" class="minibutton btn-fork " rel="facebox"><span><span class="icon"></span>Fork</span></a></li>
            

            <div id="fork_box" style="display:none">
              <h2>Where do you want to fork this to?</h2>
              
                <div class="full-button">
                  <form action="/mcurry/progress_bar/fork" method="post"><div style="margin:0;padding:0"><input name="authenticity_token" type="hidden" value="db88def4cfee8937af2bd0f11777ba578a629ced" /></div>
                    <button class="classy"><span>Fork to sassman</span></button>
                  </form>
                </div>
              
              
                <div class="rule"></div>
                
                  <div class="full-button">
                    <form action="/mcurry/progress_bar/fork" method="post"><div style="margin:0;padding:0"><input name="authenticity_token" type="hidden" value="db88def4cfee8937af2bd0f11777ba578a629ced" /></div>
                      <input id="organization" name="organization" type="hidden" value="lubico-business" />
                      <button class="classy"><span>Fork to lubico-business (organization)</span></button>
                    </form>
                  </div>
                
              
                <div class="rule"></div>
                
                  <p>You don't have permission to create new repositories for bruensicke</p>
                
              
            </div>
          

          <li id='pull_request_item' class='nspr' style='display:none'><a href="/mcurry/progress_bar/pull/new/master" class="minibutton btn-pull-request "><span><span class="icon"></span>Pull Request</span></a></li>
        
      
      
      <li class="repostats">
        <ul class="repo-stats">
          <li class="watchers"><a href="/mcurry/progress_bar/watchers" title="Watchers" class="tooltipped downwards">19</a></li>
          <li class="forks"><a href="/mcurry/progress_bar/network" title="Forks" class="tooltipped downwards">5</a></li>
        </ul>
      </li>
    </ul>

      </div>

        
  <ul class="tabs">
    <li><a href="http://github.com/mcurry/progress_bar/tree/master" class="selected" highlight="repo_source">Source</a></li>
    <li><a href="http://github.com/mcurry/progress_bar/commits/master" highlight="repo_commits">Commits</a></li>

    
    <li><a href="/mcurry/progress_bar/network" highlight="repo_network">Network (5)</a></li>

    

    

    
    <li><a href="/mcurry/progress_bar/graphs" highlight="repo_graphs">Graphs</a></li>

    <li class="contextswitch nochoices">
      <span class="toggle leftwards" >
        <em>Branch:</em>
        <code>master</code>
      </span>
    </li>
  </ul>

  <div style="display:none" id="pl-description"><p><em class="placeholder">click here to add a description</em></p></div>
  <div style="display:none" id="pl-homepage"><p><em class="placeholder">click here to add a homepage</em></p></div>

  <div class="subnav-bar">
  
  <ul>
    <li>
      <a href="#" class="dropdown">Switch Branches (1)</a>
      <ul>
        
          
            <li><strong>master &#x2713;</strong></li>
            
      </ul>
    </li>
    <li>
      <a href="#" class="dropdown defunct">Switch Tags (0)</a>
      
    </li>
    <li>
    
    <a href="/mcurry/progress_bar/branches" class="manage">Branch List</a>
    
    </li>
  </ul>
</div>

  
  
  
  
  
  



        
    <div id="repo_details" class="metabox clearfix">
      <div id="repo_details_loader" class="metabox-loader" style="display:none">Sending Request&hellip;</div>

        <a href="/mcurry/progress_bar/downloads" class="download-source" id="download_button" title="Download source, tagged packages and binaries."><span class="icon"></span>Downloads</a>

      <div id="repository_desc_wrapper">
      <div id="repository_description" rel="repository_description_edit">
        
          <p>CakePHP shell task for creating a simple progress bar
            <span id="read_more" style="display:none">&mdash; <a href="#readme">Read more</a></span>
          </p>
        
      </div>
      <div id="repository_description_edit" style="display:none;" class="inline-edit">
        <form action="/mcurry/progress_bar/edit/update" method="post"><div style="margin:0;padding:0"><input name="authenticity_token" type="hidden" value="db88def4cfee8937af2bd0f11777ba578a629ced" /></div>
          <input type="hidden" name="field" value="repository_description">
          <input type="text" class="textfield" name="value" value="CakePHP shell task for creating a simple progress bar">
          <div class="form-actions">
            <button class="minibutton"><span>Save</span></button> &nbsp; <a href="#" class="cancel">Cancel</a>
          </div>
        </form>
      </div>

      
      <div class="repository-homepage" id="repository_homepage" rel="repository_homepage_edit">
        <p><a href="http://www.pseudocoder.com" rel="nofollow">http://www.pseudocoder.com</a></p>
      </div>
      <div id="repository_homepage_edit" style="display:none;" class="inline-edit">
        <form action="/mcurry/progress_bar/edit/update" method="post"><div style="margin:0;padding:0"><input name="authenticity_token" type="hidden" value="db88def4cfee8937af2bd0f11777ba578a629ced" /></div>
          <input type="hidden" name="field" value="repository_homepage">
          <input type="text" class="textfield" name="value" value="http://www.pseudocoder.com">
          <div class="form-actions">
            <button class="minibutton"><span>Save</span></button> &nbsp; <a href="#" class="cancel">Cancel</a>
          </div>
        </form>
      </div>
      </div>
      <div class="rule "></div>
            <div id="url_box" class="url-box">
        <ul class="clone-urls">
          
            
            <li id="http_clone_url"><a href="http://github.com/mcurry/progress_bar.git" data-permissions="Read-Only">HTTP</a></li>
            <li id="public_clone_url"><a href="git://github.com/mcurry/progress_bar.git" data-permissions="Read-Only">Git Read-Only</a></li>
          
        </ul>
        <input type="text" spellcheck="false" id="url_field" class="url-field" />
              <span style="display:none" id="url_box_clippy"></span>
      <span id="clippy_tooltip_url_box_clippy" class="clippy-tooltip tooltipped" title="copy to clipboard">
      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
              width="14"
              height="14"
              class="clippy"
              id="clippy" >
      <param name="movie" value="http://assets0.github.com/flash/clippy.swf?v5"/>
      <param name="allowScriptAccess" value="always" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param NAME="FlashVars" value="id=url_box_clippy&amp;copied=&amp;copyto=">
      <param name="bgcolor" value="#FFFFFF">
      <param name="wmode" value="opaque">
      <embed src="http://assets0.github.com/flash/clippy.swf?v5"
             width="14"
             height="14"
             name="clippy"
             quality="high"
             allowScriptAccess="always"
             type="application/x-shockwave-flash"
             pluginspage="http://www.macromedia.com/go/getflashplayer"
             FlashVars="id=url_box_clippy&amp;copied=&amp;copyto="
             bgcolor="#FFFFFF"
             wmode="opaque"
      />
      </object>
      </span>

        <p id="url_description">This URL has <strong>Read+Write</strong> access</p>
      </div>
    </div>


        

      </div><!-- /.pagehead -->

      









<script type="text/javascript">
  GitHub.currentCommitRef = 'master'
  GitHub.currentRepoOwner = 'mcurry'
  GitHub.currentRepo = "progress_bar"
  GitHub.downloadRepo = '/mcurry/progress_bar/archives/master'
  GitHub.revType = "master"

  GitHub.controllerName = "blob"
  GitHub.actionName     = "show"
  GitHub.currentAction  = "blob#show"

  
    GitHub.hasWriteAccess = false
    GitHub.hasAdminAccess = false
    GitHub.watchingRepo = false
    GitHub.ignoredRepo = false
    GitHub.hasForkOfRepo = ""
    GitHub.hasForked = false
  

  
</script>








  <div id="commit">
    <div class="group">
        
  <div class="envelope commit">
    <div class="human">
      
        <div class="message"><pre><a href="/mcurry/progress_bar/commit/ae9dbd81cab055af50557848ffe427a0718115a4">count is for arrays...strlen for strings</a> </pre></div>
      

      <div class="actor">
        <div class="gravatar">
          
          <img src="http://www.gravatar.com/avatar/8185c9ddb4f67c42a558bfe5557b9eea?s=140&d=http%3A%2F%2Fgithub.com%2Fimages%2Fgravatars%2Fgravatar-140.png" alt="" width="30" height="30"  />
        </div>
        <div class="name"><a href="/mcurry">mcurry</a> <span>(author)</span></div>
        <div class="date">
          <abbr class="relatize" title="2010-03-19 13:51:01">Fri Mar 19 13:51:01 -0700 2010</abbr>
        </div>
      </div>

      

    </div>
    <div class="machine">
      <span>c</span>ommit&nbsp;&nbsp;<a href="/mcurry/progress_bar/commit/ae9dbd81cab055af50557848ffe427a0718115a4" hotkey="c">ae9dbd81cab055af5055</a><br />
      <span>t</span>ree&nbsp;&nbsp;&nbsp;&nbsp;<a href="/mcurry/progress_bar/tree/ae9dbd81cab055af50557848ffe427a0718115a4" hotkey="t">5f5b13d9a4823adcdb59</a><br />
      
        <span>p</span>arent&nbsp;
        
        <a href="/mcurry/progress_bar/tree/81601f66b9e83e02ddb9f508e29f334eef1f9449" hotkey="p">81601f66b9e83e02ddb9</a>
      

    </div>
  </div>

    </div>
  </div>



  
    <div id="path">
      <b><a href="/mcurry/progress_bar/tree/master">progress_bar</a></b> / <a href="/mcurry/progress_bar/tree/master/vendors">vendors</a> / <a href="/mcurry/progress_bar/tree/master/vendors/shells">shells</a> / <a href="/mcurry/progress_bar/tree/master/vendors/shells/tasks">tasks</a> / progress_bar.php       <span style="display:none" id="clippy_258">vendors/shells/tasks/progress_bar.php</span>
      
      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
              width="110"
              height="14"
              class="clippy"
              id="clippy" >
      <param name="movie" value="http://assets3.github.com/flash/clippy.swf?v5"/>
      <param name="allowScriptAccess" value="always" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param NAME="FlashVars" value="id=clippy_258&amp;copied=copied!&amp;copyto=copy to clipboard">
      <param name="bgcolor" value="#FFFFFF">
      <param name="wmode" value="opaque">
      <embed src="http://assets3.github.com/flash/clippy.swf?v5"
             width="110"
             height="14"
             name="clippy"
             quality="high"
             allowScriptAccess="always"
             type="application/x-shockwave-flash"
             pluginspage="http://www.macromedia.com/go/getflashplayer"
             FlashVars="id=clippy_258&amp;copied=copied!&amp;copyto=copy to clipboard"
             bgcolor="#FFFFFF"
             wmode="opaque"
      />
      </object>
      

    </div>

    <div id="files">
      <div class="file">
        <div class="meta">
          <div class="info">
            <span class="icon"><img alt="Txt" height="16" src="http://assets0.github.com/images/icons/txt.png?c5129f528994576c8a82366691e8f79b91c74615" width="16" /></span>
            <span class="mode" title="File Mode">100644</span>
            
              <span>160 lines (142 sloc)</span>
            
            <span>2.95 kb</span>
          </div>
          <ul class="actions">
            
              <li><a id="file-edit-link" href="#" rel="/mcurry/progress_bar/file-edit/__ref__/vendors/shells/tasks/progress_bar.php">edit</a></li>
            
            <li><a href="/mcurry/progress_bar/raw/master/vendors/shells/tasks/progress_bar.php" id="raw-url">raw</a></li>
            
              <li><a href="/mcurry/progress_bar/blame/master/vendors/shells/tasks/progress_bar.php">blame</a></li>
            
            <li><a href="/mcurry/progress_bar/commits/master/vendors/shells/tasks/progress_bar.php">history</a></li>
          </ul>
        </div>
        
  <div class="data type-php">
    
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td>
            <pre class="line_numbers"><span id="LID1" rel="#L1">1</span>
<span id="LID2" rel="#L2">2</span>
<span id="LID3" rel="#L3">3</span>
<span id="LID4" rel="#L4">4</span>
<span id="LID5" rel="#L5">5</span>
<span id="LID6" rel="#L6">6</span>
<span id="LID7" rel="#L7">7</span>
<span id="LID8" rel="#L8">8</span>
<span id="LID9" rel="#L9">9</span>
<span id="LID10" rel="#L10">10</span>
<span id="LID11" rel="#L11">11</span>
<span id="LID12" rel="#L12">12</span>
<span id="LID13" rel="#L13">13</span>
<span id="LID14" rel="#L14">14</span>
<span id="LID15" rel="#L15">15</span>
<span id="LID16" rel="#L16">16</span>
<span id="LID17" rel="#L17">17</span>
<span id="LID18" rel="#L18">18</span>
<span id="LID19" rel="#L19">19</span>
<span id="LID20" rel="#L20">20</span>
<span id="LID21" rel="#L21">21</span>
<span id="LID22" rel="#L22">22</span>
<span id="LID23" rel="#L23">23</span>
<span id="LID24" rel="#L24">24</span>
<span id="LID25" rel="#L25">25</span>
<span id="LID26" rel="#L26">26</span>
<span id="LID27" rel="#L27">27</span>
<span id="LID28" rel="#L28">28</span>
<span id="LID29" rel="#L29">29</span>
<span id="LID30" rel="#L30">30</span>
<span id="LID31" rel="#L31">31</span>
<span id="LID32" rel="#L32">32</span>
<span id="LID33" rel="#L33">33</span>
<span id="LID34" rel="#L34">34</span>
<span id="LID35" rel="#L35">35</span>
<span id="LID36" rel="#L36">36</span>
<span id="LID37" rel="#L37">37</span>
<span id="LID38" rel="#L38">38</span>
<span id="LID39" rel="#L39">39</span>
<span id="LID40" rel="#L40">40</span>
<span id="LID41" rel="#L41">41</span>
<span id="LID42" rel="#L42">42</span>
<span id="LID43" rel="#L43">43</span>
<span id="LID44" rel="#L44">44</span>
<span id="LID45" rel="#L45">45</span>
<span id="LID46" rel="#L46">46</span>
<span id="LID47" rel="#L47">47</span>
<span id="LID48" rel="#L48">48</span>
<span id="LID49" rel="#L49">49</span>
<span id="LID50" rel="#L50">50</span>
<span id="LID51" rel="#L51">51</span>
<span id="LID52" rel="#L52">52</span>
<span id="LID53" rel="#L53">53</span>
<span id="LID54" rel="#L54">54</span>
<span id="LID55" rel="#L55">55</span>
<span id="LID56" rel="#L56">56</span>
<span id="LID57" rel="#L57">57</span>
<span id="LID58" rel="#L58">58</span>
<span id="LID59" rel="#L59">59</span>
<span id="LID60" rel="#L60">60</span>
<span id="LID61" rel="#L61">61</span>
<span id="LID62" rel="#L62">62</span>
<span id="LID63" rel="#L63">63</span>
<span id="LID64" rel="#L64">64</span>
<span id="LID65" rel="#L65">65</span>
<span id="LID66" rel="#L66">66</span>
<span id="LID67" rel="#L67">67</span>
<span id="LID68" rel="#L68">68</span>
<span id="LID69" rel="#L69">69</span>
<span id="LID70" rel="#L70">70</span>
<span id="LID71" rel="#L71">71</span>
<span id="LID72" rel="#L72">72</span>
<span id="LID73" rel="#L73">73</span>
<span id="LID74" rel="#L74">74</span>
<span id="LID75" rel="#L75">75</span>
<span id="LID76" rel="#L76">76</span>
<span id="LID77" rel="#L77">77</span>
<span id="LID78" rel="#L78">78</span>
<span id="LID79" rel="#L79">79</span>
<span id="LID80" rel="#L80">80</span>
<span id="LID81" rel="#L81">81</span>
<span id="LID82" rel="#L82">82</span>
<span id="LID83" rel="#L83">83</span>
<span id="LID84" rel="#L84">84</span>
<span id="LID85" rel="#L85">85</span>
<span id="LID86" rel="#L86">86</span>
<span id="LID87" rel="#L87">87</span>
<span id="LID88" rel="#L88">88</span>
<span id="LID89" rel="#L89">89</span>
<span id="LID90" rel="#L90">90</span>
<span id="LID91" rel="#L91">91</span>
<span id="LID92" rel="#L92">92</span>
<span id="LID93" rel="#L93">93</span>
<span id="LID94" rel="#L94">94</span>
<span id="LID95" rel="#L95">95</span>
<span id="LID96" rel="#L96">96</span>
<span id="LID97" rel="#L97">97</span>
<span id="LID98" rel="#L98">98</span>
<span id="LID99" rel="#L99">99</span>
<span id="LID100" rel="#L100">100</span>
<span id="LID101" rel="#L101">101</span>
<span id="LID102" rel="#L102">102</span>
<span id="LID103" rel="#L103">103</span>
<span id="LID104" rel="#L104">104</span>
<span id="LID105" rel="#L105">105</span>
<span id="LID106" rel="#L106">106</span>
<span id="LID107" rel="#L107">107</span>
<span id="LID108" rel="#L108">108</span>
<span id="LID109" rel="#L109">109</span>
<span id="LID110" rel="#L110">110</span>
<span id="LID111" rel="#L111">111</span>
<span id="LID112" rel="#L112">112</span>
<span id="LID113" rel="#L113">113</span>
<span id="LID114" rel="#L114">114</span>
<span id="LID115" rel="#L115">115</span>
<span id="LID116" rel="#L116">116</span>
<span id="LID117" rel="#L117">117</span>
<span id="LID118" rel="#L118">118</span>
<span id="LID119" rel="#L119">119</span>
<span id="LID120" rel="#L120">120</span>
<span id="LID121" rel="#L121">121</span>
<span id="LID122" rel="#L122">122</span>
<span id="LID123" rel="#L123">123</span>
<span id="LID124" rel="#L124">124</span>
<span id="LID125" rel="#L125">125</span>
<span id="LID126" rel="#L126">126</span>
<span id="LID127" rel="#L127">127</span>
<span id="LID128" rel="#L128">128</span>
<span id="LID129" rel="#L129">129</span>
<span id="LID130" rel="#L130">130</span>
<span id="LID131" rel="#L131">131</span>
<span id="LID132" rel="#L132">132</span>
<span id="LID133" rel="#L133">133</span>
<span id="LID134" rel="#L134">134</span>
<span id="LID135" rel="#L135">135</span>
<span id="LID136" rel="#L136">136</span>
<span id="LID137" rel="#L137">137</span>
<span id="LID138" rel="#L138">138</span>
<span id="LID139" rel="#L139">139</span>
<span id="LID140" rel="#L140">140</span>
<span id="LID141" rel="#L141">141</span>
<span id="LID142" rel="#L142">142</span>
<span id="LID143" rel="#L143">143</span>
<span id="LID144" rel="#L144">144</span>
<span id="LID145" rel="#L145">145</span>
<span id="LID146" rel="#L146">146</span>
<span id="LID147" rel="#L147">147</span>
<span id="LID148" rel="#L148">148</span>
<span id="LID149" rel="#L149">149</span>
<span id="LID150" rel="#L150">150</span>
<span id="LID151" rel="#L151">151</span>
<span id="LID152" rel="#L152">152</span>
<span id="LID153" rel="#L153">153</span>
<span id="LID154" rel="#L154">154</span>
<span id="LID155" rel="#L155">155</span>
<span id="LID156" rel="#L156">156</span>
<span id="LID157" rel="#L157">157</span>
<span id="LID158" rel="#L158">158</span>
<span id="LID159" rel="#L159">159</span>
<span id="LID160" rel="#L160">160</span>
</pre>
          </td>
          <td width="100%">
            
              <div class="highlight"><pre><div class='line' id='LC1'><span class="cp">&lt;?php</span></div><div class='line' id='LC2'><span class="cm">/*</span></div><div class='line' id='LC3'><span class="cm"> * CakePHP shell task for doing a simple progress bar</span></div><div class='line' id='LC4'><span class="cm"> * Copyright (c) 2010 Matt Curry</span></div><div class='line' id='LC5'><span class="cm"> * www.PseudoCoder.com</span></div><div class='line' id='LC6'><span class="cm"> * http://github.com/mcurry/progress_bar</span></div><div class='line' id='LC7'><span class="cm"> *</span></div><div class='line' id='LC8'><span class="cm"> * @author      Matt Curry &lt;matt@pseudocoder.com&gt;</span></div><div class='line' id='LC9'><span class="cm"> * @license     MIT</span></div><div class='line' id='LC10'><span class="cm"> *</span></div><div class='line' id='LC11'><span class="cm"> */</span></div><div class='line' id='LC12'><br/></div><div class='line' id='LC13'><span class="sd">/**</span></div><div class='line' id='LC14'><span class="sd"> * Progress Bar Task</span></div><div class='line' id='LC15'><span class="sd"> *</span></div><div class='line' id='LC16'><span class="sd"> * @package progress_bar</span></div><div class='line' id='LC17'><span class="sd"> * @subpackage progrss_bar.vendors.shells.tasks</span></div><div class='line' id='LC18'><span class="sd"> */</span></div><div class='line' id='LC19'><span class="k">class</span> <span class="nc">ProgressBarTask</span> <span class="k">extends</span> <span class="nx">Shell</span> <span class="p">{</span></div><div class='line' id='LC20'><br/></div><div class='line' id='LC21'><span class="sd">/**</span></div><div class='line' id='LC22'><span class="sd"> * Maximum value on the bar</span></div><div class='line' id='LC23'><span class="sd"> *</span></div><div class='line' id='LC24'><span class="sd"> * @var int</span></div><div class='line' id='LC25'><span class="sd"> * @access public</span></div><div class='line' id='LC26'><span class="sd"> */</span></div><div class='line' id='LC27'>	<span class="k">var</span> <span class="nv">$total</span> <span class="o">=</span> <span class="m">100</span><span class="p">;</span></div><div class='line' id='LC28'><br/></div><div class='line' id='LC29'><span class="sd">/**</span></div><div class='line' id='LC30'><span class="sd"> * Size</span></div><div class='line' id='LC31'><span class="sd"> *</span></div><div class='line' id='LC32'><span class="sd"> * @var int</span></div><div class='line' id='LC33'><span class="sd"> * @access public</span></div><div class='line' id='LC34'><span class="sd"> */</span></div><div class='line' id='LC35'>	<span class="k">var</span> <span class="nv">$size</span> <span class="o">=</span> <span class="m">25</span><span class="p">;</span></div><div class='line' id='LC36'><br/></div><div class='line' id='LC37'><span class="sd">/**</span></div><div class='line' id='LC38'><span class="sd"> * Amount Completed</span></div><div class='line' id='LC39'><span class="sd"> *</span></div><div class='line' id='LC40'><span class="sd"> * @var int</span></div><div class='line' id='LC41'><span class="sd"> * @access public</span></div><div class='line' id='LC42'><span class="sd"> */</span></div><div class='line' id='LC43'>	<span class="k">var</span> <span class="nv">$done</span> <span class="o">=</span> <span class="m">0</span><span class="p">;</span></div><div class='line' id='LC44'><br/></div><div class='line' id='LC45'><span class="sd">/**</span></div><div class='line' id='LC46'><span class="sd"> * Start Time</span></div><div class='line' id='LC47'><span class="sd"> *</span></div><div class='line' id='LC48'><span class="sd"> * @var mixed</span></div><div class='line' id='LC49'><span class="sd"> * @access public</span></div><div class='line' id='LC50'><span class="sd"> */</span></div><div class='line' id='LC51'>	<span class="k">var</span> <span class="nv">$startTime</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC52'><br/></div><div class='line' id='LC53'><span class="sd">/**</span></div><div class='line' id='LC54'><span class="sd"> * String length for the previous line.  Used to overwrite hanging chars/</span></div><div class='line' id='LC55'><span class="sd"> *</span></div><div class='line' id='LC56'><span class="sd"> * @var int</span></div><div class='line' id='LC57'><span class="sd"> * @access public</span></div><div class='line' id='LC58'><span class="sd"> */</span></div><div class='line' id='LC59'>	<span class="k">var</span> <span class="nv">$strLenPrevLine</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC60'><br/></div><div class='line' id='LC61'><span class="sd">/**</span></div><div class='line' id='LC62'><span class="sd"> * Execute the task</span></div><div class='line' id='LC63'><span class="sd"> *</span></div><div class='line' id='LC64'><span class="sd"> * @return void</span></div><div class='line' id='LC65'><span class="sd"> * @access public</span></div><div class='line' id='LC66'><span class="sd"> */</span></div><div class='line' id='LC67'>	<span class="k">function</span> <span class="nf">execute</span><span class="p">()</span> <span class="p">{</span>	<span class="p">}</span></div><div class='line' id='LC68'><br/></div><div class='line' id='LC69'><span class="sd">/**</span></div><div class='line' id='LC70'><span class="sd"> * Start</span></div><div class='line' id='LC71'><span class="sd"> *</span></div><div class='line' id='LC72'><span class="sd"> * @param string $total Total value of the progress bar</span></div><div class='line' id='LC73'><span class="sd"> * @return void</span></div><div class='line' id='LC74'><span class="sd"> * @access public</span></div><div class='line' id='LC75'><span class="sd"> */</span></div><div class='line' id='LC76'>	<span class="k">function</span> <span class="nf">start</span><span class="p">(</span><span class="nv">$total</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC77'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">total</span> <span class="o">=</span> <span class="nv">$total</span><span class="p">;</span></div><div class='line' id='LC78'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">done</span> <span class="o">=</span> <span class="m">0</span><span class="p">;</span></div><div class='line' id='LC79'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">startTime</span> <span class="o">=</span> <span class="nb">time</span><span class="p">();</span></div><div class='line' id='LC80'>	<span class="p">}</span></div><div class='line' id='LC81'><br/></div><div class='line' id='LC82'><span class="sd">/**</span></div><div class='line' id='LC83'><span class="sd"> * Increment the progress</span></div><div class='line' id='LC84'><span class="sd"> *</span></div><div class='line' id='LC85'><span class="sd"> * @return void</span></div><div class='line' id='LC86'><span class="sd"> * @access public</span></div><div class='line' id='LC87'><span class="sd"> */</span></div><div class='line' id='LC88'>	<span class="k">function</span> <span class="nf">next</span><span class="p">(</span><span class="nv">$inc</span><span class="o">=</span><span class="m">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC89'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">done</span> <span class="o">+=</span> <span class="nv">$inc</span><span class="p">;</span></div><div class='line' id='LC90'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">();</span></div><div class='line' id='LC91'>	<span class="p">}</span></div><div class='line' id='LC92'><br/></div><div class='line' id='LC93'><span class="sd">/**</span></div><div class='line' id='LC94'><span class="sd"> * Set the values and output</span></div><div class='line' id='LC95'><span class="sd"> *</span></div><div class='line' id='LC96'><span class="sd"> * @param string $done Amount completed</span></div><div class='line' id='LC97'><span class="sd"> * @return void</span></div><div class='line' id='LC98'><span class="sd"> * @access public</span></div><div class='line' id='LC99'><span class="sd"> */</span></div><div class='line' id='LC100'>	<span class="k">function</span> <span class="nf">set</span><span class="p">(</span><span class="nv">$done</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC101'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$done</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC102'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">done</span> <span class="o">=</span> <span class="nb">min</span><span class="p">(</span><span class="nv">$done</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">total</span><span class="p">);</span></div><div class='line' id='LC103'>		<span class="p">}</span></div><div class='line' id='LC104'><br/></div><div class='line' id='LC105'>		<span class="nv">$perc</span> <span class="o">=</span> <span class="nb">round</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">done</span> <span class="o">/</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">total</span><span class="p">,</span> <span class="m">3</span><span class="p">);</span></div><div class='line' id='LC106'>		<span class="nv">$doneSize</span> <span class="o">=</span> <span class="nb">floor</span><span class="p">(</span><span class="nv">$perc</span> <span class="o">*</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">size</span><span class="p">);</span></div><div class='line' id='LC107'><br/></div><div class='line' id='LC108'>		<span class="nv">$output</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span></div><div class='line' id='LC109'>			<span class="s2">"</span><span class="se">\r</span><span class="s2">[%s&gt;%s] %.01f%% %d/%d %s %s"</span><span class="p">,</span></div><div class='line' id='LC110'>			<span class="nb">str_repeat</span><span class="p">(</span><span class="s2">"-"</span><span class="p">,</span> <span class="nv">$doneSize</span><span class="p">),</span></div><div class='line' id='LC111'>			<span class="nb">str_repeat</span><span class="p">(</span><span class="s2">" "</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">size</span> <span class="o">-</span> <span class="nv">$doneSize</span><span class="p">),</span></div><div class='line' id='LC112'>			<span class="nv">$perc</span> <span class="o">*</span> <span class="m">100</span><span class="p">,</span></div><div class='line' id='LC113'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">done</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">total</span><span class="p">,</span></div><div class='line' id='LC114'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">niceRemaining</span><span class="p">(),</span></div><div class='line' id='LC115'>			<span class="nx">__</span><span class="p">(</span><span class="s1">&#39;remaining&#39;</span><span class="p">,</span> <span class="k">true</span><span class="p">));</span></div><div class='line' id='LC116'><br/></div><div class='line' id='LC117'>		<span class="nv">$spaces</span> <span class="o">=</span> <span class="nb">max</span><span class="p">(</span><span class="m">0</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">strLenPrevLine</span> <span class="o">-</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$output</span><span class="p">)));</span></div><div class='line' id='LC118'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">strLenPrevLine</span> <span class="o">=</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$output</span><span class="p">);</span></div><div class='line' id='LC119'><br/></div><div class='line' id='LC120'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">out</span><span class="p">(</span><span class="nv">$output</span> <span class="o">.</span> <span class="nb">str_repeat</span><span class="p">(</span><span class="s1">&#39; &#39;</span><span class="p">,</span> <span class="nv">$spaces</span><span class="p">));</span></div><div class='line' id='LC121'>		<span class="nb">flush</span><span class="p">();</span></div><div class='line' id='LC122'>	<span class="p">}</span></div><div class='line' id='LC123'><br/></div><div class='line' id='LC124'><span class="sd">/**</span></div><div class='line' id='LC125'><span class="sd"> * Overrides standard shell output to allow /r without /n</span></div><div class='line' id='LC126'><span class="sd"> *</span></div><div class='line' id='LC127'><span class="sd"> * @see Shell::out</span></div><div class='line' id='LC128'><span class="sd"> * @param mixed $message A string to output</span></div><div class='line' id='LC129'><span class="sd"> * @return integer Returns the number of bytes returned from writing to stdout.</span></div><div class='line' id='LC130'><span class="sd"> * @access public</span></div><div class='line' id='LC131'><span class="sd"> */</span></div><div class='line' id='LC132'>	<span class="k">function</span> <span class="nf">out</span><span class="p">(</span><span class="nv">$message</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC133'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Dispatch</span><span class="o">-&gt;</span><span class="na">stdout</span><span class="p">(</span><span class="nv">$message</span><span class="p">,</span> <span class="k">false</span><span class="p">);</span></div><div class='line' id='LC134'>	<span class="p">}</span></div><div class='line' id='LC135'><br/></div><div class='line' id='LC136'><span class="sd">/**</span></div><div class='line' id='LC137'><span class="sd"> * Calculate remaining time in a nice format</span></div><div class='line' id='LC138'><span class="sd"> *</span></div><div class='line' id='LC139'><span class="sd"> * @return void</span></div><div class='line' id='LC140'><span class="sd"> * @access public</span></div><div class='line' id='LC141'><span class="sd"> */</span></div><div class='line' id='LC142'>	<span class="k">function</span> <span class="nf">niceRemaining</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC143'>		<span class="nv">$now</span> <span class="o">=</span> <span class="nb">time</span><span class="p">();</span></div><div class='line' id='LC144'>		<span class="k">if</span><span class="p">(</span><span class="nv">$now</span> <span class="o">==</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">startTime</span> <span class="o">||</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">done</span> <span class="o">==</span> <span class="m">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC145'>			<span class="k">return</span> <span class="s1">&#39;?&#39;</span><span class="p">;</span></div><div class='line' id='LC146'>		<span class="p">}</span></div><div class='line' id='LC147'><br/></div><div class='line' id='LC148'>		<span class="nv">$rate</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">startTime</span> <span class="o">-</span> <span class="nv">$now</span><span class="p">)</span> <span class="o">/</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">done</span><span class="p">;</span></div><div class='line' id='LC149'>		<span class="nv">$remaining</span> <span class="o">=</span> <span class="o">-</span><span class="m">1</span> <span class="o">*</span> <span class="nb">round</span><span class="p">(</span><span class="nv">$rate</span> <span class="o">*</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">total</span> <span class="o">-</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">done</span><span class="p">));</span></div><div class='line' id='LC150'><br/></div><div class='line' id='LC151'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$remaining</span> <span class="o">&lt;</span> <span class="m">60</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC152'>			<span class="k">return</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s1">&#39;%02d %s&#39;</span><span class="p">,</span> <span class="nv">$remaining</span><span class="p">,</span> <span class="nx">__n</span><span class="p">(</span><span class="s1">&#39;sec&#39;</span><span class="p">,</span> <span class="s1">&#39;secs&#39;</span><span class="p">,</span> <span class="nv">$remaining</span><span class="p">,</span> <span class="k">true</span><span class="p">));</span></div><div class='line' id='LC153'>		<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC154'>			<span class="k">return</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s1">&#39;%d %s, %02d %s&#39;</span><span class="p">,</span></div><div class='line' id='LC155'>				<span class="nb">floor</span><span class="p">(</span><span class="nv">$remaining</span> <span class="o">/</span> <span class="m">60</span><span class="p">),</span> <span class="nx">__n</span><span class="p">(</span><span class="s1">&#39;min&#39;</span><span class="p">,</span> <span class="s1">&#39;mins&#39;</span><span class="p">,</span> <span class="nb">floor</span><span class="p">(</span><span class="nv">$remaining</span> <span class="o">/</span> <span class="m">60</span><span class="p">),</span> <span class="k">true</span><span class="p">),</span></div><div class='line' id='LC156'>				<span class="nv">$remaining</span> <span class="o">%</span> <span class="m">60</span><span class="p">,</span> <span class="nx">__n</span><span class="p">(</span><span class="s1">&#39;sec&#39;</span><span class="p">,</span> <span class="s1">&#39;secs&#39;</span><span class="p">,</span> <span class="nv">$remaining</span> <span class="o">%</span> <span class="m">60</span><span class="p">,</span> <span class="k">true</span><span class="p">));</span></div><div class='line' id='LC157'>		<span class="p">}</span></div><div class='line' id='LC158'>	<span class="p">}</span></div><div class='line' id='LC159'><span class="p">}</span></div><div class='line' id='LC160'><span class="cp">?&gt;</span><span class="x"></span></div></pre></div>
            
          </td>
        </tr>
      </table>
    
  </div>


      </div>
    </div>

  


    </div>
  
      
    </div>

    <div id="footer" class="clearfix">
      <div class="site">
        <div class="sponsor">
          <a href="http://www.rackspace.com" class="logo">
            <img alt="Dedicated Server" src="http://assets2.github.com/images/modules/footer/rackspace_logo.png?v2?0260fd09e4addb5b7e5793ab932ea40995810234" />
          </a>
          Powered by the <a href="http://www.rackspace.com ">Dedicated
          Servers</a> and<br/> <a href="http://www.rackspacecloud.com">Cloud
          Computing</a> of Rackspace Hosting<span>&reg;</span>
        </div>

        <ul class="links">
          <li class="blog"><a href="http://github.com/blog">Blog</a></li>
          <li><a href="http://support.github.com?sso=Nfj1K3HfWxMQ-D2-8H6FwaWCF42a981VTJ0BeSLJ5hiIx_pkJqy_LxGFqVOXIqrbpOiC5-o9pEYG6Fa2PtalIo-cnv_NkX-aH4xeDCkjCWA2GHbRw2e99jKWrexgKMmulhCYe4bpdjPn1NcCgvdeHY8wecbnmgm_nni5UIdpmxuqlueMbw5NRfwOhHwGhYrw2i32QpVOgNnm73yfx1cVaXibQXlgaTFhqGUv5XZ3AMCCOiO2rASPkU7eQA20GGG7">Support</a></li>
          <li><a href="http://github.com/training">Training</a></li>
          <li><a href="http://jobs.github.com">Job Board</a></li>
          <li><a href="http://shop.github.com">Shop</a></li>
          <li><a href="http://github.com/contact">Contact</a></li>
          <li><a href="http://develop.github.com">API</a></li>
          <li><a href="http://status.github.com">Status</a></li>
        </ul>
        <ul class="sosueme">
          <li class="main">&copy; 2010 <span id="_rrt" title="0.07158s from fe2.rs.github.com">GitHub</span> Inc. All rights reserved.</li>
          <li><a href="/site/terms">Terms of Service</a></li>
          <li><a href="/site/privacy">Privacy</a></li>
          <li><a href="http://github.com/security">Security</a></li>
        </ul>
      </div>
    </div><!-- /#footer -->

    
      
      
        <!-- current locale:  -->
        <div class="locales">
          <div class="site">

            <ul class="choices clearfix limited-locales">
              <li><span class="current">English</span></li>
              
                
                  <li><a rel="nofollow" href="?locale=de">Deutsch</a></li>
                
              
                
                  <li><a rel="nofollow" href="?locale=fr">Français</a></li>
                
              
                
                  <li><a rel="nofollow" href="?locale=ja">日本語</a></li>
                
              
                
                  <li><a rel="nofollow" href="?locale=pt-BR">Português (BR)</a></li>
                
              
                
                  <li><a rel="nofollow" href="?locale=ru">Русский</a></li>
                
              
                
                  <li><a rel="nofollow" href="?locale=zh">中文</a></li>
                
              
              <li class="all"><a href="#" class="minibutton btn-forward js-all-locales"><span><span class="icon"></span>See all available languages</span></a></li>
            </ul>

            <div class="all-locales clearfix">
              <h3>Your current locale selection: <strong>English</strong>. Choose another?</h3>
              
              
                <ul class="choices">
                  
                    
                      <li><a rel="nofollow" href="?locale=en">English</a></li>
                    
                  
                    
                      <li><a rel="nofollow" href="?locale=af">Afrikaans</a></li>
                    
                  
                    
                      <li><a rel="nofollow" href="?locale=ca">Català</a></li>
                    
                  
                    
                      <li><a rel="nofollow" href="?locale=cs">Čeština</a></li>
                    
                  
                </ul>
              
                <ul class="choices">
                  
                    
                      <li><a rel="nofollow" href="?locale=de">Deutsch</a></li>
                    
                  
                    
                      <li><a rel="nofollow" href="?locale=es">Español</a></li>
                    
                  
                    
                      <li><a rel="nofollow" href="?locale=fr">Français</a></li>
                    
                  
                    
                      <li><a rel="nofollow" href="?locale=hr">Hrvatski</a></li>
                    
                  
                </ul>
              
                <ul class="choices">
                  
                    
                      <li><a rel="nofollow" href="?locale=id">Indonesia</a></li>
                    
                  
                    
                      <li><a rel="nofollow" href="?locale=it">Italiano</a></li>
                    
                  
                    
                      <li><a rel="nofollow" href="?locale=ja">日本語</a></li>
                    
                  
                    
                      <li><a rel="nofollow" href="?locale=nl">Nederlands</a></li>
                    
                  
                </ul>
              
                <ul class="choices">
                  
                    
                      <li><a rel="nofollow" href="?locale=no">Norsk</a></li>
                    
                  
                    
                      <li><a rel="nofollow" href="?locale=pl">Polski</a></li>
                    
                  
                    
                      <li><a rel="nofollow" href="?locale=pt-BR">Português (BR)</a></li>
                    
                  
                    
                      <li><a rel="nofollow" href="?locale=ru">Русский</a></li>
                    
                  
                </ul>
              
                <ul class="choices">
                  
                    
                      <li><a rel="nofollow" href="?locale=sr">Српски</a></li>
                    
                  
                    
                      <li><a rel="nofollow" href="?locale=sv">Svenska</a></li>
                    
                  
                    
                      <li><a rel="nofollow" href="?locale=zh">中文</a></li>
                    
                  
                </ul>
              
            </div>

          </div>
          <div class="fade"></div>
        </div>
      
    

    <script>window._auth_token = "db88def4cfee8937af2bd0f11777ba578a629ced"</script>
    <div id="keyboard_shortcuts_pane" style="display:none">
  <h2>Keyboard Shortcuts</h2>

  <div class="columns threecols">
    <div class="column first">
      <h3>Site wide shortcuts</h3>
      <dl class="keyboard-mappings">
        <dt>s</dt>
        <dd>Focus site search</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>?</dt>
        <dd>Bring up this help dialog</dd>
      </dl>
    </div><!-- /.column.first -->
    <div class="column middle">
      <h3>Commit list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selected down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selected up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>t</dt>
        <dd>Open tree</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>p</dt>
        <dd>Open parent</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>c <em>or</em> o <em>or</em> enter</dt>
        <dd>Open commit</dd>
      </dl>
    </div><!-- /.column.first -->
    <div class="column last">
      <h3>Pull request list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selected down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selected up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>o <em>or</em> enter</dt>
        <dd>Open issue</dd>
      </dl>
    </div><!-- /.columns.last -->
  </div><!-- /.columns.equacols -->

  <div class="rule"></div>

  <h3>Issues</h3>

  <div class="columns threecols">
    <div class="column first">
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selected down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selected up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>x</dt>
        <dd>Toggle select target</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>o <em>or</em> enter</dt>
        <dd>Open issue</dd>
      </dl>
    </div><!-- /.column.first -->
    <div class="column middle">
      <dl class="keyboard-mappings">
        <dt>I</dt>
        <dd>Mark selected as read</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>U</dt>
        <dd>Mark selected as unread</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>e</dt>
        <dd>Close selected</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>y</dt>
        <dd>Remove selected from view</dd>
      </dl>
    </div><!-- /.column.middle -->
    <div class="column last">
      <dl class="keyboard-mappings">
        <dt>c</dt>
        <dd>Create issue</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>l</dt>
        <dd>Create label</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>i</dt>
        <dd>Back to inbox</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>u</dt>
        <dd>Back to issues</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>/</dt>
        <dd>Focus issues search</dd>
      </dl>
    </div>
  </div>

  <div class="rule"></div>

  <h3>Network Graph</h3>
  <div class="columns equacols">
    <div class="column first">
      <dl class="keyboard-mappings">
        <dt>← <em>or</em> h</dt>
        <dd>Scroll left</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>→ <em>or</em> l</dt>
        <dd>Scroll right</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>↑ <em>or</em> k</dt>
        <dd>Scroll up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>↓ <em>or</em> j</dt>
        <dd>Scroll down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>t</dt>
        <dd>Toggle visibility of head labels</dd>
      </dl>
    </div><!-- /.column.first -->
    <div class="column last">
      <dl class="keyboard-mappings">
        <dt>shift ← <em>or</em> shift h</dt>
        <dd>Scroll all the way left</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>shift → <em>or</em> shift l</dt>
        <dd>Scroll all the way right</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>shift ↑ <em>or</em> shift k</dt>
        <dd>Scroll all the way up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>shift ↓ <em>or</em> shift j</dt>
        <dd>Scroll all the way down</dd>
      </dl>
    </div><!-- /.column.last -->
  </div>

</div>
    

    <!--[if IE 8]>
    <script type="text/javascript" charset="utf-8">
      $(document.body).addClass("ie8")
    </script>
    <![endif]-->

    <!--[if IE 7]>
    <script type="text/javascript" charset="utf-8">
      $(document.body).addClass("ie7")
    </script>
    <![endif]-->

    <script type="text/javascript">
      _kmq.push(['trackClick', 'entice-signup-button', 'Entice banner clicked']);
      
    </script>
    
  </body>
</html>

