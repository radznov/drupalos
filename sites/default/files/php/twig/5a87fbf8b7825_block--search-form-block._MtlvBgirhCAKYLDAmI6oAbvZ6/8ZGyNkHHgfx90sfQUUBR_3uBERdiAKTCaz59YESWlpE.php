<?php

/* @classy/block/block--search-form-block.html.twig */
class __TwigTemplate_7df3ae2789d6c605a8be47619ae0732af46e46d269ea2c273b30ea0ba3c900f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e96076de84e570bf3ce0a516744e06dd46fc885dbaa349ffaf18ac608f4b60f3 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96076de84e570bf3ce0a516744e06dd46fc885dbaa349ffaf18ac608f4b60f3->enter($__internal_e96076de84e570bf3ce0a516744e06dd46fc885dbaa349ffaf18ac608f4b60f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@classy/block/block--search-form-block.html.twig"));

        $tags = array("set" => 30, "if" => 38, "block" => 42);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
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

        // line 30
        $context["classes"] = array(0 => "block", 1 => "block-search", 2 => "container-inline");
        // line 36
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 38
        if (($context["label"] ?? null)) {
            // line 39
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 41
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "</div>
";
        
        $__internal_e96076de84e570bf3ce0a516744e06dd46fc885dbaa349ffaf18ac608f4b60f3->leave($__internal_e96076de84e570bf3ce0a516744e06dd46fc885dbaa349ffaf18ac608f4b60f3_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b323a9b77cf45110f928ab84191023a781af84b602b7800561ee1178b791844 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b323a9b77cf45110f928ab84191023a781af84b602b7800561ee1178b791844->enter($__internal_2b323a9b77cf45110f928ab84191023a781af84b602b7800561ee1178b791844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
        
        $__internal_2b323a9b77cf45110f928ab84191023a781af84b602b7800561ee1178b791844->leave($__internal_2b323a9b77cf45110f928ab84191023a781af84b602b7800561ee1178b791844_prof);

    }

    public function getTemplateName()
    {
        return "@classy/block/block--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 43,  83 => 42,  75 => 45,  73 => 42,  68 => 41,  60 => 39,  58 => 38,  54 => 37,  49 => 36,  47 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@classy/block/block--search-form-block.html.twig", "D:\\Programy\\wamp\\wamp64\\www\\dr\\core\\themes\\classy\\templates\\block\\block--search-form-block.html.twig");
    }
}
