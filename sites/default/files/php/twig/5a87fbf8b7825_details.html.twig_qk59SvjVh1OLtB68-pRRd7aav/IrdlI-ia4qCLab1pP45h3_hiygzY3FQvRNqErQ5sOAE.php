<?php

/* core/themes/classy/templates/form/details.html.twig */
class __TwigTemplate_55dd14524693f31592ecb2fadf553414bd67b42f2392a4d90e27d024db2a8509 extends Twig_Template
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
        $__internal_1c2d8ced676fd25b0c3a1b323dd2334e8a6ebbedbd3f0c2d5f49195ebad805c0 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2d8ced676fd25b0c3a1b323dd2334e8a6ebbedbd3f0c2d5f49195ebad805c0->enter($__internal_1c2d8ced676fd25b0c3a1b323dd2334e8a6ebbedbd3f0c2d5f49195ebad805c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/details.html.twig"));

        $tags = array("if" => 18, "set" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
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

        // line 17
        echo "<details";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">";
        // line 18
        if (($context["title"] ?? null)) {
            // line 20
            $context["summary_classes"] = array(0 => ((            // line 21
($context["required"] ?? null)) ? ("js-form-required") : ("")), 1 => ((            // line 22
($context["required"] ?? null)) ? ("form-required") : ("")));
            // line 25
            echo "    <summary";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["summary_attributes"] ?? null), "addClass", array(0 => ($context["summary_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</summary>";
        }
        // line 27
        echo "<div class=\"details-wrapper\">
    ";
        // line 28
        if (($context["errors"] ?? null)) {
            // line 29
            echo "      <div class=\"form-item--error-message\">
        <strong>";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "</strong>
      </div>
    ";
        }
        // line 33
        if (($context["description"] ?? null)) {
            // line 34
            echo "<div class=\"details-description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
            echo "</div>";
        }
        // line 36
        if (($context["children"] ?? null)) {
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        }
        // line 39
        if (($context["value"] ?? null)) {
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["value"] ?? null), "html", null, true));
        }
        // line 42
        echo "</div>
</details>
";
        
        $__internal_1c2d8ced676fd25b0c3a1b323dd2334e8a6ebbedbd3f0c2d5f49195ebad805c0->leave($__internal_1c2d8ced676fd25b0c3a1b323dd2334e8a6ebbedbd3f0c2d5f49195ebad805c0_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 42,  91 => 40,  89 => 39,  86 => 37,  84 => 36,  79 => 34,  77 => 33,  71 => 30,  68 => 29,  66 => 28,  63 => 27,  56 => 25,  54 => 22,  53 => 21,  52 => 20,  50 => 18,  46 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/form/details.html.twig", "D:\\Programy\\wamp\\wamp64\\www\\dr\\core\\themes\\classy\\templates\\form\\details.html.twig");
    }
}
