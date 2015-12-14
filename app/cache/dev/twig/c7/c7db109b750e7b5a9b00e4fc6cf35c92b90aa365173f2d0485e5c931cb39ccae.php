<?php

/* PgGsbFraisBundle:SaisirFrais:erreurs.html.twig */
class __TwigTemplate_2a2d2abc13c4409c0e55d01d02e7b5fe724f33bfb4dfc107f3b206efbc6eee40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_778d9489dd7a219343c3ef59a56f55be549124dcfeab98d445e7319382f872d9 = $this->env->getExtension("native_profiler");
        $__internal_778d9489dd7a219343c3ef59a56f55be549124dcfeab98d445e7319382f872d9->enter($__internal_778d9489dd7a219343c3ef59a56f55be549124dcfeab98d445e7319382f872d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:erreurs.html.twig"));

        // line 1
        echo "<div class =\"erreur\">
<ul>
 ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leserreurs"]) ? $context["leserreurs"] : $this->getContext($context, "leserreurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["erreur"]) {
            // line 4
            echo "\t
      <li>";
            // line 5
            echo twig_escape_filter($this->env, $context["erreur"], "html", null, true);
            echo "</li>
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['erreur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul></div>
";
        
        $__internal_778d9489dd7a219343c3ef59a56f55be549124dcfeab98d445e7319382f872d9->leave($__internal_778d9489dd7a219343c3ef59a56f55be549124dcfeab98d445e7319382f872d9_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:erreurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  33 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class ="erreur">*/
/* <ul>*/
/*  {% for erreur in  leserreurs %}*/
/* 	*/
/*       <li>{{erreur}}</li>*/
/* 	*/
/* {%endfor%}*/
/* </ul></div>*/
/* */
