<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_c4337ef21567374b4943fe7dd8609bc0ac155209295ddd112ba577c9822e7f75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_555addfa0e8e381d733b5c1f3740865aefd0aa8870d5682898b3e9d8c1cf40bf = $this->env->getExtension("native_profiler");
        $__internal_555addfa0e8e381d733b5c1f3740865aefd0aa8870d5682898b3e9d8c1cf40bf->enter($__internal_555addfa0e8e381d733b5c1f3740865aefd0aa8870d5682898b3e9d8c1cf40bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsbfrais/styles/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsbfrais/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
     </div>
          ";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
  </html>

          
          
";
        
        $__internal_555addfa0e8e381d733b5c1f3740865aefd0aa8870d5682898b3e9d8c1cf40bf->leave($__internal_555addfa0e8e381d733b5c1f3740865aefd0aa8870d5682898b3e9d8c1cf40bf_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_551f1fd197aa45702bad612122de0ba062638b4a5335757fd5a83dc5b16b3b81 = $this->env->getExtension("native_profiler");
        $__internal_551f1fd197aa45702bad612122de0ba062638b4a5335757fd5a83dc5b16b3b81->enter($__internal_551f1fd197aa45702bad612122de0ba062638b4a5335757fd5a83dc5b16b3b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_551f1fd197aa45702bad612122de0ba062638b4a5335757fd5a83dc5b16b3b81->leave($__internal_551f1fd197aa45702bad612122de0ba062638b4a5335757fd5a83dc5b16b3b81_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_52784af3aac3de35cbd844cfd111e6cab1a937decb4bb21d8e4ff8d83dff0f70 = $this->env->getExtension("native_profiler");
        $__internal_52784af3aac3de35cbd844cfd111e6cab1a937decb4bb21d8e4ff8d83dff0f70->enter($__internal_52784af3aac3de35cbd844cfd111e6cab1a937decb4bb21d8e4ff8d83dff0f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_52784af3aac3de35cbd844cfd111e6cab1a937decb4bb21d8e4ff8d83dff0f70->leave($__internal_52784af3aac3de35cbd844cfd111e6cab1a937decb4bb21d8e4ff8d83dff0f70_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_899da7e44bdf741e83e1ca58daa874be17661b58764f792ee901c4005129bc5a = $this->env->getExtension("native_profiler");
        $__internal_899da7e44bdf741e83e1ca58daa874be17661b58764f792ee901c4005129bc5a->enter($__internal_899da7e44bdf741e83e1ca58daa874be17661b58764f792ee901c4005129bc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_899da7e44bdf741e83e1ca58daa874be17661b58764f792ee901c4005129bc5a->leave($__internal_899da7e44bdf741e83e1ca58daa874be17661b58764f792ee901c4005129bc5a_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  96 => 20,  89 => 22,  87 => 20,  79 => 19,  72 => 18,  66 => 17,  54 => 23,  51 => 19,  49 => 17,  42 => 13,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"*/
/*        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">*/
/*   <head>*/
/*     <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8" />*/
/*     <link href="{{ asset('bundles/gsbfrais/styles/styles.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />*/
/*   </head>*/
/*   <body>*/
/*     <div id="page">*/
/*       <div id="entete">*/
/*         <img src="{{ asset('bundles/gsbfrais/images/logo.jpg')}}" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />*/
/*         <h1>Suivi du remboursement des frais</h1>*/
/*       </div>*/
/*      </div>*/
/*           {% block menu %}*/
/*           {% endblock %}*/
/*           {% block body %} */
/*                  {% block bloc1 %}*/
/*                  {% endblock %}*/
/*           {% endblock %}*/
/*     </body>*/
/*   </html>*/
/* */
/*           */
/*           */
/* */
