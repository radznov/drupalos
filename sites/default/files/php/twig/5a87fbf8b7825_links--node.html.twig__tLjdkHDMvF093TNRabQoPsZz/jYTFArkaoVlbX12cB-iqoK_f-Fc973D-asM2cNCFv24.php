<?php

/* core/themes/classy/templates/content/links--node.html.twig */
class __TwigTemplate_13ce8ba7b8f7cdac5fe52bf21a1b4152b5fc35c8fb400389aa9e05d334db9bf0 extends Twig_Template
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
        $__internal_e07395a9764740e6a14049622d0b5bba716d5fb8e34ba3db20aea912efc9617d = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07395a9764740e6a14049622d0b5bba716d5fb8e34ba3db20aea912efc9617d->enter($__internal_e07395a9764740e6a14049622d0b5bba716d5fb8e34ba3db20aea912efc9617d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/content/links--node.html.twig"));

        $tags = array("if" => 36, "include" => 38);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'include'),
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

        // line 36
        if (($context["links"] ?? null)) {
            // line 37
            echo "  <div class=\"node__links\">
    ";
            // line 38
            $this->loadTemplate("links.html.twig", "core/themes/classy/templates/content/links--node.html.twig", 38)->display($context);
            // line 39
            echo "  </div>
";
        }
        
        $__internal_e07395a9764740e6a14049622d0b5bba716d5fb8e34ba3db20aea912efc9617d->leave($__internal_e07395a9764740e6a14049622d0b5bba716d5fb8e34ba3db20aea912efc9617d_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content/links--node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 39,  51 => 38,  48 => 37,  46 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/content/links--node.html.twig", "D:\\Programy\\wamp\\wamp64\\www\\dr\\core\\themes\\classy\\templates\\content\\links--node.html.twig");
    }
}
