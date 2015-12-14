<?php

/* base.html.twig */
class __TwigTemplate_fd1c88c0a599fd640a988765883ce5d6e3a579a54a52f3baef0e561ef713b9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0fbdd9a4015a3890dba829ab9807acb53e6164a943e60a5496d2dacdc0e425c = $this->env->getExtension("native_profiler");
        $__internal_e0fbdd9a4015a3890dba829ab9807acb53e6164a943e60a5496d2dacdc0e425c->enter($__internal_e0fbdd9a4015a3890dba829ab9807acb53e6164a943e60a5496d2dacdc0e425c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e0fbdd9a4015a3890dba829ab9807acb53e6164a943e60a5496d2dacdc0e425c->leave($__internal_e0fbdd9a4015a3890dba829ab9807acb53e6164a943e60a5496d2dacdc0e425c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d0cd5f4de35351beeda45d0170cbf3979d6afc44f478f54665f21c3cd474eb9 = $this->env->getExtension("native_profiler");
        $__internal_3d0cd5f4de35351beeda45d0170cbf3979d6afc44f478f54665f21c3cd474eb9->enter($__internal_3d0cd5f4de35351beeda45d0170cbf3979d6afc44f478f54665f21c3cd474eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3d0cd5f4de35351beeda45d0170cbf3979d6afc44f478f54665f21c3cd474eb9->leave($__internal_3d0cd5f4de35351beeda45d0170cbf3979d6afc44f478f54665f21c3cd474eb9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_146a94a3b81a7fa89a17760fd2be2a02a8d55c22aaeeb28c979f06ce09268f10 = $this->env->getExtension("native_profiler");
        $__internal_146a94a3b81a7fa89a17760fd2be2a02a8d55c22aaeeb28c979f06ce09268f10->enter($__internal_146a94a3b81a7fa89a17760fd2be2a02a8d55c22aaeeb28c979f06ce09268f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_146a94a3b81a7fa89a17760fd2be2a02a8d55c22aaeeb28c979f06ce09268f10->leave($__internal_146a94a3b81a7fa89a17760fd2be2a02a8d55c22aaeeb28c979f06ce09268f10_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f65562535c411d92795b0e61af547aa1608fffb87799e40935f3564d5a028f1f = $this->env->getExtension("native_profiler");
        $__internal_f65562535c411d92795b0e61af547aa1608fffb87799e40935f3564d5a028f1f->enter($__internal_f65562535c411d92795b0e61af547aa1608fffb87799e40935f3564d5a028f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f65562535c411d92795b0e61af547aa1608fffb87799e40935f3564d5a028f1f->leave($__internal_f65562535c411d92795b0e61af547aa1608fffb87799e40935f3564d5a028f1f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d177bc9dd42cde5b0589cda8ab2ec8feae0f782ee8bfc54afe712f79bce4380f = $this->env->getExtension("native_profiler");
        $__internal_d177bc9dd42cde5b0589cda8ab2ec8feae0f782ee8bfc54afe712f79bce4380f->enter($__internal_d177bc9dd42cde5b0589cda8ab2ec8feae0f782ee8bfc54afe712f79bce4380f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d177bc9dd42cde5b0589cda8ab2ec8feae0f782ee8bfc54afe712f79bce4380f->leave($__internal_d177bc9dd42cde5b0589cda8ab2ec8feae0f782ee8bfc54afe712f79bce4380f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
