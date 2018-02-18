<?php

/* core/themes/classy/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_5403fc0ea22f01fcebdb66974664515d7edbca5b4a09332f15ca4fa5f8fdc0b3 extends Twig_Template
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
        $__internal_b69d54b35e8df1a7c900574189f9f15ab29e8a8e9b78c0e68edb19fc1c1ddca0 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69d54b35e8df1a7c900574189f9f15ab29e8a8e9b78c0e68edb19fc1c1ddca0->enter($__internal_b69d54b35e8df1a7c900574189f9f15ab29e8a8e9b78c0e68edb19fc1c1ddca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/navigation/menu-local-tasks.html.twig"));

        $tags = array("if" => 14);
        $filters = array("t" => 15);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 14
        if (($context["primary"] ?? null)) {
            // line 15
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Primary tabs")));
            echo "</h2>
  <ul class=\"tabs primary\">";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["primary"] ?? null), "html", null, true));
            echo "</ul>
";
        }
        // line 18
        if (($context["secondary"] ?? null)) {
            // line 19
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Secondary tabs")));
            echo "</h2>
  <ul class=\"tabs secondary\">";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["secondary"] ?? null), "html", null, true));
            echo "</ul>
";
        }
        
        $__internal_b69d54b35e8df1a7c900574189f9f15ab29e8a8e9b78c0e68edb19fc1c1ddca0->leave($__internal_b69d54b35e8df1a7c900574189f9f15ab29e8a8e9b78c0e68edb19fc1c1ddca0_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  60 => 19,  58 => 18,  53 => 16,  48 => 15,  46 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/navigation/menu-local-tasks.html.twig", "D:\\Programy\\wamp\\wamp64\\www\\dr\\core\\themes\\classy\\templates\\navigation\\menu-local-tasks.html.twig");
    }
}
