<?php

/* ImbuzzitAdminBundle::layout.html.twig */
class __TwigTemplate_84d0bee3c7536abb83dea022918b9220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "  </head>
  <body style=\"padding-top: 50px;\">
    <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <a href=\"\" class=\"brand\">Imbuzzit Admin</a>
          <div class=\"nav-collapse collapse\">
            <ul class=\"nav\">
              <li class=\"\">
                <a href=\"\">Home</a>
              </li>
              <li class=\"active\">
                <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user"), "html", null, true);
        echo "\">Users</a>
              </li>
              <li class=\"\">
                <a href=\"\">Streams</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class=\"container\">
      <div id=\"content\" class=\"container\">
        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "      </div>
    </div>
    ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Imbuzzit Admin";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/imbuzzitadmin/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/imbuzzitadmin/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "        ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "      <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.9.0.min.js\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/imbuzzitadmin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "ImbuzzitAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 41,  108 => 40,  105 => 39,  101 => 36,  98 => 35,  92 => 9,  87 => 8,  84 => 7,  78 => 5,  73 => 43,  71 => 39,  67 => 37,  65 => 35,  50 => 23,  36 => 11,  34 => 7,  29 => 5,  23 => 1,);
    }
}
