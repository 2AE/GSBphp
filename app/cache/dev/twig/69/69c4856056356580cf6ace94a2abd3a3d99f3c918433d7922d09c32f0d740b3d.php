<?php

/* PgGsbFraisBundle::accueil.html.twig */
class __TwigTemplate_ca3b3bc0562e641e813640e7f4ad680c0d7dc604f406ddaa0e7059b93b397f70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle::accueil.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aec16f4c075df5e91a6dc0323835bab343d4f83ccf45c58dbd727b8b262e3e7a = $this->env->getExtension("native_profiler");
        $__internal_aec16f4c075df5e91a6dc0323835bab343d4f83ccf45c58dbd727b8b262e3e7a->enter($__internal_aec16f4c075df5e91a6dc0323835bab343d4f83ccf45c58dbd727b8b262e3e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aec16f4c075df5e91a6dc0323835bab343d4f83ccf45c58dbd727b8b262e3e7a->leave($__internal_aec16f4c075df5e91a6dc0323835bab343d4f83ccf45c58dbd727b8b262e3e7a_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5a7db82619e59e8c7fc842ce8b84f98c5f2cb1fc8cec8e44a44c2bc9197858d = $this->env->getExtension("native_profiler");
        $__internal_e5a7db82619e59e8c7fc842ce8b84f98c5f2cb1fc8cec8e44a44c2bc9197858d->enter($__internal_e5a7db82619e59e8c7fc842ce8b84f98c5f2cb1fc8cec8e44a44c2bc9197858d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "<div id=\"menuGauche\">
     <div id=\"infosUtil\">
         <h3>
            ";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "nom"), "method", true, true)) {
            // line 7
            echo "                           Visiteur: bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
            echo "<br>   
            ";
        }
        // line 9
        echo "
            ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "numimmat"), "method", true, true)) {
            // line 11
            echo "                      Matricule: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "numimmat"), "method"), "html", null, true);
            echo "<br>   
            ";
        }
        // line 12
        echo " 
        </h3>
     </div>  
        <ul id=\"menuList\">
      ";
        // line 20
        echo "\t   <li class=\"smenu\">
              <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_listefrais");
        echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>\t
           <li class=\"smenu\">
              <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
         </ul>
     </div> 
";
        
        $__internal_e5a7db82619e59e8c7fc842ce8b84f98c5f2cb1fc8cec8e44a44c2bc9197858d->leave($__internal_e5a7db82619e59e8c7fc842ce8b84f98c5f2cb1fc8cec8e44a44c2bc9197858d_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  79 => 24,  73 => 21,  70 => 20,  64 => 12,  58 => 11,  56 => 10,  53 => 9,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::layout.html.twig" %}*/
/* {% block menu %}*/
/* <div id="menuGauche">*/
/*      <div id="infosUtil">*/
/*          <h3>*/
/*             {%if(app.session.get('nom') is defined )%}*/
/*                            Visiteur: bonjour {{app.session.get('nom')}}<br>   */
/*             {%endif%}*/
/* */
/*             {%if(app.session.get('numimmat') is defined )%}*/
/*                       Matricule: {{app.session.get('numimmat')}}<br>   */
/*             {%endif%} */
/*         </h3>*/
/*      </div>  */
/*         <ul id="menuList">*/
/*       {#   <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_listevehicule')}}" title="Liste des véhicules ">Liste des véhicules</a>*/
/*            </li>*/
/*            #}*/
/* 	   <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_saisirfrais')}}" title="Saisie fiche de frais ">Saisie fiche de frais</a>*/
/*            </li>*/
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_listefrais')}}" title="Consultation de mes fiches de frais">Mes fiches de frais</a>*/
/*            </li>	*/
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_deconnexion')}}" title="Se déconnecter">Déconnexion</a>*/
/*            </li>*/
/*          </ul>*/
/*      </div> */
/* {% endblock%}*/
/* */
/* */
/* {#*/
/*  <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_saisirfrais')}}" title="Saisie fiche de frais ">Saisie fiche de frais</a>*/
/*            </li>*/
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_listefrais')}}" title="Consultation de mes fiches de frais">Mes fiches de frais</a>*/
/*            </li>*/
/* */
/* */
/* #}*/
