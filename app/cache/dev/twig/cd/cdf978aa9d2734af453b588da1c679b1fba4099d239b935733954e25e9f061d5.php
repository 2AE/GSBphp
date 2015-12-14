<?php

/* PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig */
class __TwigTemplate_12b5bc53aa8b54782312c2647afd296bffaec7581120d5de0f2bb5f332b65a96 extends Twig_Template
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
        $__internal_a526c66913abf8c2d1ff8119fa84fdfc3a4d9c24578e8ec5d879410660fc02ab = $this->env->getExtension("native_profiler");
        $__internal_a526c66913abf8c2d1ff8119fa84fdfc3a4d9c24578e8ec5d879410660fc02ab->enter($__internal_a526c66913abf8c2d1ff8119fa84fdfc3a4d9c24578e8ec5d879410660fc02ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig"));

        // line 1
        echo "<div id=\"contenu\">
      <h2>Renseigner ma fiche de frais du mois ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")), "html", null, true);
        echo "</h2>
      <form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" method=\"POST\">
          <div class=\"corpsForm\">
              <fieldset>
                <legend>Eléments forfaitisés</legend>
                     ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 8
            echo "                         ";
            $context["idfrais"] = $this->getAttribute($context["unfrais"], "idfrais", array());
            // line 9
            echo "                         ";
            $context["libelle"] = $this->getAttribute($context["unfrais"], "libelle", array());
            // line 10
            echo "                         ";
            $context["quantite"] = $this->getAttribute($context["unfrais"], "quantite", array());
            // line 11
            echo "                        <p>
                            <label for=\"idFrais\">";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "</label>
                            <input type=\"text\" id=\"idFrais\" name=\"lesFrais[";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["idfrais"]) ? $context["idfrais"] : $this->getContext($context, "idfrais")), "html", null, true);
            echo "]\" size=\"10\" maxlength=\"5\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite")), "html", null, true);
            echo "\" >
                        </p>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "              </fieldset>
          </div>
          <div class=\"piedForm\">
          <p>
            <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
            <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
          </p> 
          </div>
      </form>
</div>
 
      ";
        
        $__internal_a526c66913abf8c2d1ff8119fa84fdfc3a4d9c24578e8ec5d879410660fc02ab->leave($__internal_a526c66913abf8c2d1ff8119fa84fdfc3a4d9c24578e8ec5d879410660fc02ab_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  58 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  38 => 7,  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div id="contenu">*/
/*       <h2>Renseigner ma fiche de frais du mois {{nummois}}-{{numannee}}</h2>*/
/*       <form action="{{path('pg_gsb_frais_saisirfrais')}}" method="POST">*/
/*           <div class="corpsForm">*/
/*               <fieldset>*/
/*                 <legend>Eléments forfaitisés</legend>*/
/*                      {% for unfrais in  lesfraisforfait %}*/
/*                          {% set idfrais = unfrais.idfrais %}*/
/*                          {% set libelle = unfrais.libelle %}*/
/*                          {% set quantite = unfrais.quantite %}*/
/*                         <p>*/
/*                             <label for="idFrais">{{libelle}}</label>*/
/*                             <input type="text" id="idFrais" name="lesFrais[{{idfrais}}]" size="10" maxlength="5" value="{{quantite}}" >*/
/*                         </p>*/
/*                       {%endfor%}*/
/*               </fieldset>*/
/*           </div>*/
/*           <div class="piedForm">*/
/*           <p>*/
/*             <input id="ok" type="submit" value="Valider" size="20" />*/
/*             <input id="annuler" type="reset" value="Effacer" size="20" />*/
/*           </p> */
/*           </div>*/
/*       </form>*/
/* </div>*/
/*  */
/*       */
