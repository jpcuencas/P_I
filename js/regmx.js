<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BUSCAR MX - Encuentra los servidores de intercambio de correo para un nombre de dominio - DnsQueries</title>
<meta name="verify-v1" content="ec4yWJ2UsijmBihl56oGOJf/lVrlMMyOapzyJB5/GcU=" />
<meta name="y_key" content="6131bd2e8151e65e" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="keywords" content="mx, lookup, mail, exchanger, domain, dominio, hostname" />
<meta name="description" content="Usa esta herramienta para realizar la busqueda de MX, encuentra los servidores de correo (mx) para cualquier nombre de dominio" />
<meta name="revisit-after" content="7 days" />
<meta name="distribution" content="Global" />
<link rel="shortcut icon" href="/favicon.ico" />
<link href="/css/global.css" media="screen, projection" rel="stylesheet" type="text/css" />
<link href="/css/tutorial.css" media="screen, projection" rel="stylesheet" type="text/css" />
<link href="/css/print.css" media="print" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
  <link rel="stylesheet" type="text/css" href="/style/style_ie6.css" title="default" />
<![endif]-->
<script src="/script/prototype.php" type="text/javascript"></script>
<script src="/script/script.js" type="text/javascript"></script>
<!--[if IE 6]>
  <script src="/script/drop_menu.js" type="text/javascript"></script>
<![endif]-->
<script src="/script/flashobject.js" type="text/javascript"></script>
</head>
<body>
<script type="text/javascript">
var gUsrIndex = 'abc538aeffe93ce26646d024c027e86a';
var gLangSelected = 'es';
var gGoogleApiKey = 'ABQIAAAAG1M73r1aoriM0gALL3zSmBTRXTbPZIeKJvc8gJyW56gtaz881xTuXqAYKHSl2NfEPi1ADqJ7MOlAyA';
window.google_analytics_uacct = "UA-112285-6";
</script>
<div id="page">
  <div id="principale">
    <div id="content">
    <div id="logo_print"><img src="/image/logo_print.png" alt="DNSQueries.com - network tools made easy"/></div>
	<div class="inputAutocompleter" id="inputAutocompleter" style="display:none"></div>
<!-- google_ad_section_start -->
    <div class="location"><a href="/es/">Home</a> | Busqueda de MX</div>

                <h1>BUSCAR MX - Encuentra los servidores de intercambio de correo para un nombre de dominio</h1>
            <div class="pageBanner top">
<script type="text/javascript"><!--
google_ad_client = "pub-6411969466352703";
/* DNSQ2 Lead Alto */
google_ad_slot = "7119715148";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
                  <div class="info">
                <div class="txt">
                      <div class="box gray">
            <div class="rtop"><p class="r1"></p><p class="r2"></p><p class="r3"></p><p class="r4"></p></div>
            <h3>
            <span id="mxlookup_help_launcher" class="helpLauncher"><img src="/image/info.png" border="0" alt="" /></span>Busqueda de MX            </h3>
                          <div id="mxlookup_help" style="display:none;" class="helpTooltip"><p>Introduce un nombre de dominio (Por ejemplo: google.es) y esta herramienta te mostrará los registros de servidores de intercambio de correo asociados</p></div>
              <script type="text/javascript">new Tooltip('mxlookup_help_launcher','mxlookup_help')</script>
              

            <form id="mxlookup_form" action="/es/mx-lookup.php"
                            onsubmit="return isValidHostName(this,'mxlookup_input','mxlookup_dialog')"
                            method="post" accept-charset="UTF-8">
              <fieldset class="gray">
                <div id="mxlookup_dialog" class="dialog" style="display:none;">
                                </div>
                
                <label for="mxlookup_input">Nombre de dominio:</label>
                <input class="txt_1" type="text" id="mxlookup_input" name="hostname" value="" />
                        <input class="sub_1" type="submit" id="mxlookup_submit" value="Enviar &#8250;&#8250;" />
                              </fieldset>
            </form>
            <script type="text/javascript">
            $('mxlookup_dialog').hide();new AjaxSelect('mxlookup_input','hostnames');            $('mxlookup_form').setAttribute( "autocomplete", "off" );
            </script>

          </div><!-- box -->
                    Cuando un mensaje de correo electrónico es enviado a través de Internet, el remitente (el agente de transferencia de correo - MTA Mail Transfer Agent) hace una petición al DNS solicitando el registro MX para los nombres de dominio de destino. El nombre de dominio es la parte de la dirección de correo que va a continuación de la @. Esta consulta (a través del servidor SMTP) devuelve una lista de nombres de dominios de servidores de intercambio de correo que aceptan correo entrante para dicho dominio, junto con un número de preferencia. (Los valores más bajos indican prioridad más alta).            </div><!-- txt -->
          </div><!-- info -->
            <br style="clear:both" /><br />
<!-- google_ad_section_end -->

<div class="pageBanner bottom">
<script type="text/javascript"><!--
google_ad_client = "pub-6411969466352703";
/* DNSQ2 Lead Basso */
google_ad_slot = "8686456886";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
    
    </div><!-- content -->
  </div><!-- principale -->

	<!-- 0,23 -->
  <div id="ipAddressOps" class="linkOps" style="display:none">
	<ul>
	  <li id="Ptr">Registro Inverso</li>
	  <li id="Ip4Converter">Convertir en número entero</li>
	  <li id="GeoIp">Localiza direccion IP</li>
      <li id="DnsBl">Averigualo en RBLs</li>
      <li id="CpyToClip">Copiar al portapapeles</li>
	</ul>
  </div>
  <div id="hostNameOps" class="linkOps" style="display:none">
	<ul>
      <li id="Dns">Consulta DNS</li>
      <li id="DnsTraversal">Recorridos Dns</li>
      <li id="BannerCheck">Comprueba Banner</li>
      <li id="Ping">Ping</li>
      <li id="Traceroute">Traceroute</li>
      <li id="SmtpTester">Test servidor SMTP</li>
      <li id="CpyToClip">Copiar al portapapeles</li>
	</ul>
  </div>
  <div id="intOps" class="linkOps" style="display:none">
	<ul>
	  <li id="Ip4Converter">Convertir en octetos</li>
	</ul>
  </div>

  <div id="logo"><a href="/" title="DNS Queries - Home Page"><span>DNS Queries - Home Page</span></a></div>

  <div id="head_menu">
	<ul id="menu">
	<li>
<a class="top_add" href="#null">DQ Tools</a>
<ul>
<li>
<a class="" href="/es/cual_es_mi_ip.php">Toda la información sobre su IP</a>
</li>
<li>
<a class="add" href="#null">Red</a>
<ul>
<li>
<a href="/es/chequear_dominio.php">Test Dominio</a>
</li>
<li>
<a href="/es/mi_ip_esta_en_lista_negra.php">Averiguar IP en RBLs</a>
</li>
<li>
<a href="/es/localizar_lugar_direccion_ip.php">Localizar direcciones IP</a>
</li>
<li>
<a href="/es/ping_online.php">Ping</a>
</li>
<li>
<a href="/es/como_hacer_traceroute_tracert.php">Traceroute</a>
</li>
<li>
<a href="/es/convertir_una_IP_v4.php">Convertidor IPv4</a>
</li>
<li>
<a href="/es/smtp_test_check.php">Test servidor SMTP</a>
</li>
<li>
<a href="/es/scanner_de_puertos.php">Escaner de puertos</a>
</li>
<li>
<a href="/es/test_server_banner.php">Comprobar banner</a>
</li>
<li>
<a href="/es/vecinos_servidor_web.php">Vecinos de servidor web</a>
</li>
<li>
<a href="/es/whois.php">Whois Info</a>
</li>
<li>
<a href="/es/punycode_encoder_decoder.php">Conversor Punycode</a>
</li>
</ul>
</li>
<li>
<a class="add" href="#null">Dns Tools</a>
<ul>
<li>
<a href="/es/dns_traversal.php">Recorridos DNS</a>
</li>
<li>
<a href="/es/consulta_servidor_dns.php">Hacer peticiones DNS</a>
</li>
<li>
<a href="/es/traducir_ips_nombres_de_dominio.php">Resolución Inversa</a>
</li>
<li>
<a href="/es/mx-lookup.php">Busqueda de MX</a>
</li>
</ul>
</li>
<li>
<a class="add" href="#null">Http &amp; SEO</a>
<ul>
<li>
<a href="/es/simulador_de_googlebot.php">Simulador Googlebot</a>
</li>
<li>
<a href="/es/chequear_http_headers.php">Cabeceras Http</a>
</li>
<li>
<a href="/es/densidad_palabras_claves.php">Densidad Palabras Clave</a>
</li>
<li>
<a href="/es/chequear_http_gzip.php">Comprobar Http Gzip</a>
</li>
</ul>
</li>
<li>
<a class="" href="/es/criptografia.php">Cifra y Descifra</a>
</li>
<li>
<a class="" href="/es/test_expresiones_regulares.php">RegExp Tester</a>
</li>
</ul>
</li>
<li>
<a class="top_add" href="#null">Browser Addons</a>
<ul>
<li>
<a class="" href="/toolbar/">Toolbar</a>
</li>
<li>
<a class="" href="/foxlocation/">FoxLocation</a>
</li>
</ul>
</li>
<li>
<a class="top" href="/en/forum/">Forum</a>
</li>
<li>
<a class="top" href="/en/faq/">Faq</a>
</li>
<li>
<a class="top" href="/en/contacts.php">Contáctanos</a>
</li>
      <li><a class="top_add" href="#null">Idioma</a>
        <ul style="width:80px;">
          <li style="width:100px;"><a style="width:80px;" href='/en/'>  <img src='/image/flags/gb.gif' border='0' alt='English' />  English</a></li>
<li style="width:100px;"><a style="width:80px;" href='/it/'>  <img src='/image/flags/it.gif' border='0' alt='Italiano' />  Italiano</a></li>
<li style="width:100px;"><a style="width:80px;" href='/es/'>  <img src='/image/flags/es.gif' border='0' alt='Espanol' />  Espanol</a></li>
<li style="width:100px;"><a style="width:80px;" href='/zh/'>  <img src='/image/flags/cn.gif' border='0' alt='Chinese' />  Chinese</a></li>
        </ul>
      </li>
	</ul>
  </div>

  <div id="head">
    </div><!-- head -->
  <div id="shoulderSx">
          <div class="box blue">
          <div class="rtop"><p class="r1"></p><p class="r2"></p><p class="r3"></p><p class="r4"></p></div>
          <h4>Su IP es </h4>
          <p class="info"><span class="ipFmt">84.120.95.129</span></p>
          <p class="info">ES <img src="/image/flags/es.gif" border="0" valign="abs_middle" /></p>
          <div class="rbottom"><p class="r4"></p><p class="r3"></p><p class="r2"></p><p class="r1"></p></div>
        </div><!-- box -->
                <div class="box gray">
          <div class="rtop"><p class="r1"></p><p class="r2"></p><p class="r3"></p><p class="r4"></p></div>
          <h4>DNSQueries <em>News</em></h4>
          <ul class="news">
                            <li>29 junio 2010<br />
                <a href="/en/news/detail/call_for_ideas/">Call for Ideas!</a><br />
                <em>We are waiting to know your needs!</em>
                </li>
                                <li>25 noviembre 2009<br />
                <a href="/en/news/detail/bugfix_javascript_style_issue/">Fixed bug &quot;style not defined&quot;</a><br />
                <em>IE8 users can now be free from annoying popups!</em>
                </li>
                                <li>16 octubre 2009<br />
                <a href="/en/news/detail/toolbar_internet_explorer_ie/">IE Toolbar released</a><br />
                <em>After more than a month of developement we have just released the new toolbar version!</em>
                </li>
                                <li> 6 octubre 2009<br />
                <a href="/en/news/detail/toolbar_500/">The toolbar goes 500</a><br />
                <em>Statistics told us that our toolbar have more than 500 active users</em>
                </li>
                                <li>14 septiembre 2009<br />
                <a href="/en/news/detail/new_smtp_tester_release/">New smtp tester version</a><br />
                <em>We have just released a new smtp tester version!</em>
                </li>
                                <li>11 septiembre 2009<br />
                <a href="/en/news/detail/improvements_r2_v1/">New improvements released</a><br />
                <em>After 24h from the deploy of DNSQueries.com v2 we have released a few improvements to the interface</em>
                </li>
                                <li>10 septiembre 2009<br />
                <a href="/en/news/detail/release_2_dnsqueries_com/">New portal released</a><br />
                <em>We did it again...</em>
                </li>
                          </ul>
          <p class="all"><a href="/en/news/">&#8250; All News</a></p>
          <div class="rbottom"><p class="r4"></p><p class="r3"></p><p class="r2"></p><p class="r1"></p></div>
        </div><!-- box -->
        
  <div class="banner">
    <div id="translate"><a href="/en/langprj/"><img src="/image/translate.jpg" /></a></div>
	<script type="text/javascript">
      // <![CDATA[

      var so = new FlashObject("/swf/translation.swf", "toolbar", "184", "245", "8", "#006496", true);
      so.addParam("menu", "false");
      so.addParam("wmode", "transparent");
      so.addVariable("gotolink", "/en/langprj/");
      so.write("translate");
      // ]]>
    </script>

  </div>

  </div><!-- shoulderSx -->
  <div id="shoulderDx">
    <div class="adv">
        <script type="text/javascript"><!--
        google_ad_client = "pub-6411969466352703";
        /* DNSQ2 Sky Spalla */
        google_ad_slot = "4006864565";
        google_ad_width = 160;
        google_ad_height = 600;
        //-->
        </script>
        <script type="text/javascript"
        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
    </div>

    <script type="text/javascript"><!--
    google_ad_client = "pub-6411969466352703";
    /* DNSQueries Links 160x90, creato 13/03/09 */
    google_ad_slot = "8344438310";
    google_ad_width = 160;
    google_ad_height = 90;
    //-->
    </script>
    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
      <br />
      <br />
    <script type="text/javascript">var addthis_pub="cybercox";</script>
      <a href="http://www.addthis.com/bookmark.php" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="http://s7.addthis.com/static/btn/lg-bookmark-en.gif" width="125" height="16" border="0" alt="Bookmark and Share" style="border:0"/></a>
    <script type="text/javascript" src="http://s7.addthis.com/js/152/addthis_widget.js"></script>

      <br />
      <br />

    <script type="text/javascript" language="javascript" src="http://www.tkqlhce.com/mc104z84uwy074xyAJNTMOMSL?target=_top&amp;mouseover=N"></script>

      </div>
  <!-- shoulderDx -->

  <div id="footer">
    <div class="container">
    <p>Copyright &copy; 2012 <b>DNSQueries.com</b> - DNSQueries.com is the network testing toolset made for you and available for free!</p>
    <ul>
        <li><a href="/es/chequear_dominio.php"><span>Test Dominio</span></a></li>
        <li><a href="/es/mi_ip_esta_en_lista_negra.php"><span>Averiguar IP en RBLs</span></a></li>
        <li><a href="/es/dns_traversal.php"><span>Recorridos DNS</span></a></li>
        <li><a href="/es/traducir_ips_nombres_de_dominio.php"><span>Resolución Inversa</span></a></li>
        <li><a href="/es/chequear_http_headers.php"><span>Cabeceras Http</span></a></li>
        <li><a href="/es/chequear_http_gzip.php"><span>Comprobar Http Gzip</span></a></li>
        <li><a href="/es/densidad_palabras_claves.php"><span>Densidad Palabras Clave</span></a></li>
    </ul>
    <ul>
        <li><a href="/en/contribute.php"><span>Contribute to DNSQueries.com </span></a></li>
        <li><a href="/en/langprj/"><span>Language Project</span></a></li>
    </ul>
    </div>
  </div>
</div><!-- page -->

<script type="text/javascript">

opsLink = $$('span.hnFmt');
opsLink.each(function(item) {
	new Contextual(item,'hostNameOps');
});
opsLink = $$('span.ipFmt');
opsLink.each(function(item) {
	new Contextual(item,'ipAddressOps');
});
opsLink = $$('span.intFmt');
opsLink.each(function(item) {
	new Contextual(item,'intOps');
});
</script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-112285-6");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>