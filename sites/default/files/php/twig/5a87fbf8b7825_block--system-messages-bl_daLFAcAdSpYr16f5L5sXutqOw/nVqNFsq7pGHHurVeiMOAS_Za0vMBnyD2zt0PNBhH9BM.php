<?php

/* core/themes/stable/templates/block/block--system-messages-block.html.twig */
class __TwigTemplate_f5a720fd9d85cca74267dcba36e96a96c5cbb965a925e6d6c9b8b08c6c6f0b24 extends Twig_Template
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
        $__internal_fe373c7fa00aff355b41bebe27558af9127a8832ac9a89717dae5183dbd3387e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe373c7fa00aff355b41bebe27558af9127a8832ac9a89717dae5183dbd3387e->enter($__internal_fe373c7fa00aff355b41bebe27558af9127a8832ac9a89717dae5183dbd3387e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/block/block--system-messages-block.html.twig"));

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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
";
        
        $__internal_fe373c7fa00aff355b41bebe27558af9127a8832ac9a89717dae5183dbd3387e->leave($__internal_fe373c7fa00aff355b41bebe27558af9127a8832ac9a89717dae5183dbd3387e_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/block/block--system-messages-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/block/block--system-messages-block.html.twig", "D:\\Programy\\wamp\\wamp64\\www\\dr\\core\\themes\\stable\\templates\\block\\block--system-messages-block.html.twig");
    }
}
