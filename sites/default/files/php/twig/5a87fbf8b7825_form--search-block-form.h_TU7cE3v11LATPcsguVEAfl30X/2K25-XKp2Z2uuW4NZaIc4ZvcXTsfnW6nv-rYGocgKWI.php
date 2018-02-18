<?php

/* core/themes/bartik/templates/form--search-block-form.html.twig */
class __TwigTemplate_ab818bbff4546426d5763fe815dc1cb03532cd419dbe07a0b8db081e92173756 extends Twig_Template
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
        $__internal_50b4e2e9eff82c99ab8dc88de4bdc4efda0ee7ef413752feecc443ab9c01b0d7 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b4e2e9eff82c99ab8dc88de4bdc4efda0ee7ef413752feecc443ab9c01b0d7->enter($__internal_50b4e2e9eff82c99ab8dc88de4bdc4efda0ee7ef413752feecc443ab9c01b0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/form--search-block-form.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 13
        echo "<form";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "search-form", 1 => "search-block-form"), "method"), "html", null, true));
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
</form>
";
        
        $__internal_50b4e2e9eff82c99ab8dc88de4bdc4efda0ee7ef413752feecc443ab9c01b0d7->leave($__internal_50b4e2e9eff82c99ab8dc88de4bdc4efda0ee7ef413752feecc443ab9c01b0d7_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/form--search-block-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  46 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/bartik/templates/form--search-block-form.html.twig", "D:\\Programy\\wamp\\wamp64\\www\\dr\\core\\themes\\bartik\\templates\\form--search-block-form.html.twig");
    }
}
