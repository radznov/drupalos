<?php

/* core/themes/classy/templates/form/datetime-form.html.twig */
class __TwigTemplate_805cc3be094be961ddc3d2437365b811eb6ac5d4a75146518bcf963fcfa6d26f extends Twig_Template
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
        $__internal_5898a2acacfef9c27aca38a9b4b2fb742ac3fd0a3a967746e610bb9e1bdb720d = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5898a2acacfef9c27aca38a9b4b2fb742ac3fd0a3a967746e610bb9e1bdb720d->enter($__internal_5898a2acacfef9c27aca38a9b4b2fb742ac3fd0a3a967746e610bb9e1bdb720d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/datetime-form.html.twig"));

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
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "container-inline"), "method"), "html", null, true));
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
</div>
";
        
        $__internal_5898a2acacfef9c27aca38a9b4b2fb742ac3fd0a3a967746e610bb9e1bdb720d->leave($__internal_5898a2acacfef9c27aca38a9b4b2fb742ac3fd0a3a967746e610bb9e1bdb720d_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/datetime-form.html.twig";
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
        return new Twig_Source("", "core/themes/classy/templates/form/datetime-form.html.twig", "D:\\Programy\\wamp\\wamp64\\www\\dr\\core\\themes\\classy\\templates\\form\\datetime-form.html.twig");
    }
}
