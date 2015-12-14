<?php

/* PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig */
class __TwigTemplate_9164c6d2a9d0ba02796a3cc3bb3d8f6129827fc6f1ad2b8a6d3704dafad2dbb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::accueil.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b821f664311ae31980b5bf49477844d2fb0e50fd4eec451579fcf7b45f8d1cf = $this->env->getExtension("native_profiler");
        $__internal_6b821f664311ae31980b5bf49477844d2fb0e50fd4eec451579fcf7b45f8d1cf->enter($__internal_6b821f664311ae31980b5bf49477844d2fb0e50fd4eec451579fcf7b45f8d1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b821f664311ae31980b5bf49477844d2fb0e50fd4eec451579fcf7b45f8d1cf->leave($__internal_6b821f664311ae31980b5bf49477844d2fb0e50fd4eec451579fcf7b45f8d1cf_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0083f6c4fd1820adef6c510e962ff0f917a3172bbdb555e619ce6f2d70776852 = $this->env->getExtension("native_profiler");
        $__internal_0083f6c4fd1820adef6c510e962ff0f917a3172bbdb555e619ce6f2d70776852->enter($__internal_0083f6c4fd1820adef6c510e962ff0f917a3172bbdb555e619ce6f2d70776852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_0083f6c4fd1820adef6c510e962ff0f917a3172bbdb555e619ce6f2d70776852->leave($__internal_0083f6c4fd1820adef6c510e962ff0f917a3172bbdb555e619ce6f2d70776852_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_1ec95daf065613b2f738d6ed2bec64aaa4cb92d4e7b7034b8e3cac13cf12cd01 = $this->env->getExtension("native_profiler");
        $__internal_1ec95daf065613b2f738d6ed2bec64aaa4cb92d4e7b7034b8e3cac13cf12cd01->enter($__internal_1ec95daf065613b2f738d6ed2bec64aaa4cb92d4e7b7034b8e3cac13cf12cd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo " ";
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:erreurs.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 4)->display(array_merge($context, array("leserreurs" => (isset($context["leserreursforfait"]) ? $context["leserreursforfait"] : $this->getContext($context, "leserreursforfait")))));
        // line 5
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 5)->display(array_merge($context, array("lesfraisforfait" => (isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")), "nummois" =>         // line 6
(isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "numannee" => (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")))));
        // line 7
        echo "
";
        // line 8
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:erreurs.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 8)->display(array_merge($context, array("leserreurs" => (isset($context["leserreurshorsforfait"]) ? $context["leserreurshorsforfait"] : $this->getContext($context, "leserreurshorsforfait")))));
        // line 9
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 9)->display(array_merge($context, array("lesfraishorsforfait" => (isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")))));
        
        $__internal_1ec95daf065613b2f738d6ed2bec64aaa4cb92d4e7b7034b8e3cac13cf12cd01->leave($__internal_1ec95daf065613b2f738d6ed2bec64aaa4cb92d4e7b7034b8e3cac13cf12cd01_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  62 => 8,  59 => 7,  57 => 6,  56 => 5,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::accueil.html.twig" %}*/
/* {% block body %}*/
/* {% block bloc1 %}*/
/*  {% include 'PgGsbFraisBundle:SaisirFrais:erreurs.html.twig' with {'leserreurs':leserreursforfait} %}*/
/* {% include 'PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig' with {'lesfraisforfait':lesfraisforfait,*/
/* 'nummois':nummois,'numannee':numannee} %}*/
/* */
/* {% include 'PgGsbFraisBundle:SaisirFrais:erreurs.html.twig' with {'leserreurs':leserreurshorsforfait} %}*/
/* {% include 'PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig' with {'lesfraishorsforfait':lesfraishorsforfait} %}*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
/* */
