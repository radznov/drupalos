<?php

/* core/themes/bartik/templates/block--system-branding-block.html.twig */
class __TwigTemplate_c3196c59410da5cfdcb9cdb1bb7ab8e8294269fea71c37bc1357407708171022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/bartik/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9642c17cd67cfe74dd1fabcf0b5d8e3e71c6049c5839720305ede07b6e65cf5 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9642c17cd67cfe74dd1fabcf0b5d8e3e71c6049c5839720305ede07b6e65cf5->enter($__internal_d9642c17cd67cfe74dd1fabcf0b5d8e3e71c6049c5839720305ede07b6e65cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/block--system-branding-block.html.twig"));

        $tags = array("set" => 16, "if" => 18);
        $filters = array("t" => 19);
        $functions = array("path" => 19);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
                array('path')
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

        // line 16
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "site-branding"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9642c17cd67cfe74dd1fabcf0b5d8e3e71c6049c5839720305ede07b6e65cf5->leave($__internal_d9642c17cd67cfe74dd1fabcf0b5d8e3e71c6049c5839720305ede07b6e65cf5_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_e3dd4d84602455b2b2164182a46c04c2b25d956eaf9035d523fbbb554ae724d4 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3dd4d84602455b2b2164182a46c04c2b25d956eaf9035d523fbbb554ae724d4->enter($__internal_e3dd4d84602455b2b2164182a46c04c2b25d956eaf9035d523fbbb554ae724d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 19
            echo "    <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\" class=\"site-branding__logo\">
      <img src=\"";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" />
    </a>
  ";
        }
        // line 23
        echo "  ";
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 24
            echo "    <div class=\"site-branding__text\">
      ";
            // line 25
            if (($context["site_name"] ?? null)) {
                // line 26
                echo "        <div class=\"site-branding__name\">
          <a href=\"";
                // line 27
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
                echo "</a>
        </div>
      ";
            }
            // line 30
            echo "      ";
            if (($context["site_slogan"] ?? null)) {
                // line 31
                echo "        <div class=\"site-branding__slogan\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
                echo "</div>
      ";
            }
            // line 33
            echo "    </div>
  ";
        }
        
        $__internal_e3dd4d84602455b2b2164182a46c04c2b25d956eaf9035d523fbbb554ae724d4->leave($__internal_e3dd4d84602455b2b2164182a46c04c2b25d956eaf9035d523fbbb554ae724d4_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  109 => 31,  106 => 30,  96 => 27,  93 => 26,  91 => 25,  88 => 24,  85 => 23,  77 => 20,  70 => 19,  67 => 18,  61 => 17,  54 => 1,  52 => 16,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/bartik/templates/block--system-branding-block.html.twig", "D:\\Programy\\wamp\\wamp64\\www\\dr\\core\\themes\\bartik\\templates\\block--system-branding-block.html.twig");
    }
}
