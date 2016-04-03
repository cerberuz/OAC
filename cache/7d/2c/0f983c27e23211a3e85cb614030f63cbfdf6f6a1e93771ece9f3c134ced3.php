<?php

/* relatorios/tempo_medio_atendentes.html.twig */
class __TwigTemplate_7d2c0f983c27e23211a3e85cb614030f63cbfdf6f6a1e93771ece9f3c134ced3 extends Twig_Template
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
        // line 1
        echo "<div class=\"header\">
    <p>";
        // line 2
        echo strtr(gettext("Período de %dataInicial% a %dataFinal%"), array("%dataInicial%" => (isset($context["dataInicial"]) ? $context["dataInicial"] : null), "%dataFinal%" => (isset($context["dataFinal"]) ? $context["dataFinal"] : null), ));
        echo "</p>
</div>
<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>";
        // line 7
        echo gettext("Usuario");
        echo "</th>
            <th>";
        // line 8
        echo gettext("Atenciones");
        echo "</th>
            <th title=\"";
        // line 9
        echo gettext("Tiempo medio de espera");
        echo "\">";
        echo gettext("TME");
        echo "</th>
            <th title=\"";
        // line 10
        echo gettext("Tiempo medio de desplazamiento");
        echo "\">";
        echo gettext("TMD");
        echo "</th>
            <th title=\"";
        // line 11
        echo gettext("Tiempo medio de atención");
        echo "\">";
        echo gettext("TMA");
        echo "</th>
            <th>";
        // line 12
        echo gettext("Tiempo total");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["relatorio"]) ? $context["relatorio"] : null), "dados"));
        foreach ($context['_seq'] as $context["_key"] => $context["dado"]) {
            // line 17
            echo "        <tr>
            <td class=\"strong\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dado"]) ? $context["dado"] : null), "atendente"), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dado"]) ? $context["dado"] : null), "total"), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('secFormat')->getCallable(), array($this->env, $this->getAttribute((isset($context["dado"]) ? $context["dado"] : null), "espera"))), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('secFormat')->getCallable(), array($this->env, $this->getAttribute((isset($context["dado"]) ? $context["dado"] : null), "deslocamento"))), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('secFormat')->getCallable(), array($this->env, $this->getAttribute((isset($context["dado"]) ? $context["dado"] : null), "atendimento"))), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('secFormat')->getCallable(), array($this->env, $this->getAttribute((isset($context["dado"]) ? $context["dado"] : null), "tempoTotal"))), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </tbody>
</table>
<div>
    <h4>";
        // line 29
        echo gettext("Leyenda");
        echo "</h4>
    <ul>
        <li><strong>";
        // line 31
        echo gettext("TME");
        echo "</strong>: ";
        echo gettext("Tiempo medio de espera");
        echo "</li>
        <li><strong>";
        // line 32
        echo gettext("TMD");
        echo "</strong>: ";
        echo gettext("Tiempo medio de desplazamiento");
        echo "</li>
        <li><strong>";
        // line 33
        echo gettext("TMA");
        echo "</strong>: ";
        echo gettext("Tiempo medio de atención");
        echo "</li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "relatorios/tempo_medio_atendentes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  115 => 32,  109 => 31,  104 => 29,  99 => 26,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  50 => 11,  44 => 10,  38 => 9,  34 => 8,  30 => 7,  22 => 2,  69 => 24,  65 => 22,  62 => 21,  56 => 12,  53 => 17,  51 => 16,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
