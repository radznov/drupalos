<?php

/* core/themes/bartik/templates/status-messages.html.twig */
class __TwigTemplate_c5daea63eb5c9b07363d50e96892a392ad0b41c79a1ac6151fbcc5251c862a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/misc/status-messages.html.twig", "core/themes/bartik/templates/status-messages.html.twig", 1);
        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/misc/status-messages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e65adc8e0f54c87ff1ee35585c926f939bb5f5773b7d294277eeb833cdc24f7 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e65adc8e0f54c87ff1ee35585c926f939bb5f5773b7d294277eeb833cdc24f7->enter($__internal_4e65adc8e0f54c87ff1ee35585c926f939bb5f5773b7d294277eeb833cdc24f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/status-messages.html.twig"));

        $tags = array("if" => 24);
        $filters = array();
        $functions = array("attach_library" => 25);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e65adc8e0f54c87ff1ee35585c926f939bb5f5773b7d294277eeb833cdc24f7->leave($__internal_4e65adc8e0f54c87ff1ee35585c926f939bb5f5773b7d294277eeb833cdc24f7_prof);

    }

    // line 23
    public function block_messages($context, array $blocks = array())
    {
        $__internal_346cb914a68f250b4b8ee95a537cba670fd602bbd22295f63e512c1378b08d43 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_346cb914a68f250b4b8ee95a537cba670fd602bbd22295f63e512c1378b08d43->enter($__internal_346cb914a68f250b4b8ee95a537cba670fd602bbd22295f63e512c1378b08d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 24
        echo "  ";
        if ( !twig_test_empty(($context["message_list"] ?? null))) {
            // line 25
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bartik/messages"), "html", null, true));
            echo "
    <div class=\"messages__wrapper layout-container\">
      ";
            // line 27
            $this->displayParentBlock("messages", $context, $blocks);
            echo "
    </div>
  ";
        }
        
        $__internal_346cb914a68f250b4b8ee95a537cba670fd602bbd22295f63e512c1378b08d43->leave($__internal_346cb914a68f250b4b8ee95a537cba670fd602bbd22295f63e512c1378b08d43_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  67 => 25,  64 => 24,  58 => 23,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/bartik/templates/status-messages.html.twig", "D:\\Programy\\wamp\\wamp64\\www\\dr\\core\\themes\\bartik\\templates\\status-messages.html.twig");
    }
}
