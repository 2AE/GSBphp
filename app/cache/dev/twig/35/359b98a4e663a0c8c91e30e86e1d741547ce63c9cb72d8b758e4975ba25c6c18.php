<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_eb499e4b09b98e8b29bc8554c0987a5a8ef579e1308541bb98abcb92f35f4e57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle:Home:connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f952d00f6c4bf273107532c5b87787a1f83c162c7526d2bfdfb2e6be9c3c4fe = $this->env->getExtension("native_profiler");
        $__internal_5f952d00f6c4bf273107532c5b87787a1f83c162c7526d2bfdfb2e6be9c3c4fe->enter($__internal_5f952d00f6c4bf273107532c5b87787a1f83c162c7526d2bfdfb2e6be9c3c4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f952d00f6c4bf273107532c5b87787a1f83c162c7526d2bfdfb2e6be9c3c4fe->leave($__internal_5f952d00f6c4bf273107532c5b87787a1f83c162c7526d2bfdfb2e6be9c3c4fe_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9105660d9285522afef02cb75a19fc0a4176e03bdd0decf0c685de2419dc331 = $this->env->getExtension("native_profiler");
        $__internal_a9105660d9285522afef02cb75a19fc0a4176e03bdd0decf0c685de2419dc331->enter($__internal_a9105660d9285522afef02cb75a19fc0a4176e03bdd0decf0c685de2419dc331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_a9105660d9285522afef02cb75a19fc0a4176e03bdd0decf0c685de2419dc331->leave($__internal_a9105660d9285522afef02cb75a19fc0a4176e03bdd0decf0c685de2419dc331_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_f5367fd8f6860201eefe7670f7ae375eb595bc95e7770340826503d9ec7ff7a7 = $this->env->getExtension("native_profiler");
        $__internal_f5367fd8f6860201eefe7670f7ae375eb595bc95e7770340826503d9ec7ff7a7->enter($__internal_f5367fd8f6860201eefe7670f7ae375eb595bc95e7770340826503d9ec7ff7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        echo " 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "            <div class =\"erreur\">
            <ul>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</ul></div>
      ";
        }
        // line 10
        echo "<form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_validerconnexion");
        echo "\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    ";
        
        $__internal_f5367fd8f6860201eefe7670f7ae375eb595bc95e7770340826503d9ec7ff7a7->leave($__internal_f5367fd8f6860201eefe7670f7ae375eb595bc95e7770340826503d9ec7ff7a7_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  67 => 8,  64 => 7,  62 => 6,  52 => 3,  44 => 24,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*  {% block bloc1 %} */
/*  <div id="contenu">*/
/*       <h2>Identification utilisateur</h2>*/
/*       {%if(message is defined )%}*/
/*             <div class ="erreur">*/
/*             <ul>{{message}}</ul></div>*/
/*       {%endif%}*/
/* <form method="POST" action="{{path('pg_gsb_frais_validerconnexion')}}">*/
/*         <p>*/
/*           <label for="nom">Login*</label>*/
/*            <input id="login" type="text" name="login"  size="30" maxlength="45">*/
/*         </p>*/
/* 	<p>*/
/*             <label for="mdp">Mot de passe*</label>*/
/*             <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">*/
/*         </p>*/
/*          <input type="submit" value="Valider" name="valider">*/
/*          <input type="reset" value="Annuler" name="annuler"> */
/*       </p>*/
/* </form>*/
/* </div>*/
/*     {% endblock %}    */
/*     {% endblock%}*/
/*      */
