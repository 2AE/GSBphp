<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7b6d6c2593db544e4909732fa9a7813f821407d9b0ed673788a50afb01981c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d65f65bce0e74a1d0ddc93c6d442d1a3d338046b1085b2b1a744b94595727e16 = $this->env->getExtension("native_profiler");
        $__internal_d65f65bce0e74a1d0ddc93c6d442d1a3d338046b1085b2b1a744b94595727e16->enter($__internal_d65f65bce0e74a1d0ddc93c6d442d1a3d338046b1085b2b1a744b94595727e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d65f65bce0e74a1d0ddc93c6d442d1a3d338046b1085b2b1a744b94595727e16->leave($__internal_d65f65bce0e74a1d0ddc93c6d442d1a3d338046b1085b2b1a744b94595727e16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94605542c71cef87f09113d053234bedc73f921d2db4f001174d41a9316c9791 = $this->env->getExtension("native_profiler");
        $__internal_94605542c71cef87f09113d053234bedc73f921d2db4f001174d41a9316c9791->enter($__internal_94605542c71cef87f09113d053234bedc73f921d2db4f001174d41a9316c9791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_94605542c71cef87f09113d053234bedc73f921d2db4f001174d41a9316c9791->leave($__internal_94605542c71cef87f09113d053234bedc73f921d2db4f001174d41a9316c9791_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f37e88fc1333fae57a3fd823db9e537b798cec0288428eff401a94c4436344e = $this->env->getExtension("native_profiler");
        $__internal_9f37e88fc1333fae57a3fd823db9e537b798cec0288428eff401a94c4436344e->enter($__internal_9f37e88fc1333fae57a3fd823db9e537b798cec0288428eff401a94c4436344e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9f37e88fc1333fae57a3fd823db9e537b798cec0288428eff401a94c4436344e->leave($__internal_9f37e88fc1333fae57a3fd823db9e537b798cec0288428eff401a94c4436344e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e069d9fd5b69281557038bf87628ff7ca63414d513c3e7f04e023abf77a5b6df = $this->env->getExtension("native_profiler");
        $__internal_e069d9fd5b69281557038bf87628ff7ca63414d513c3e7f04e023abf77a5b6df->enter($__internal_e069d9fd5b69281557038bf87628ff7ca63414d513c3e7f04e023abf77a5b6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e069d9fd5b69281557038bf87628ff7ca63414d513c3e7f04e023abf77a5b6df->leave($__internal_e069d9fd5b69281557038bf87628ff7ca63414d513c3e7f04e023abf77a5b6df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
