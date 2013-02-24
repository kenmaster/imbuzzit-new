<?php

/* ImbuzzitAdminBundle:User:index.html.twig */
class __TwigTemplate_e1d4117e10d2fc3643a4be18cff37699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ImbuzzitAdminBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ImbuzzitAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1 style=\"float: left;\">User list</h1>
<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\" style=\"float: right;\">Create a new entry</a>
<table class=\"table table-hover\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Name</th>
            <th>Firstname</th>
            <th>Isactive</th>
            <th>Birthday</th>
            <th>Sexe</th>
            <th>Account_birthday</th>
            <th>City</th>
            <th>Last_connect</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "        ";
            $context["sexe"] = ("form.sexe." . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sexe"));
            // line 26
            echo "        <tr>
            <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname"), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isActive"), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "birthday")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "birthday"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["sexe"]) ? $context["sexe"] : $this->getContext($context, "sexe")), array(), "user"), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "accountbirthday")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "accountbirthday"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city"), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastconnect")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastconnect"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                <ul style=\"list-style:none;\">
                    <li>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-mini\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-mini\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "    </tbody>
</table>


<a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Create a new entry</a>
    
";
    }

    public function getTemplateName()
    {
        return "ImbuzzitAdminBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 54,  139 => 50,  127 => 44,  121 => 41,  112 => 37,  108 => 36,  102 => 35,  98 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  66 => 27,  63 => 26,  60 => 25,  56 => 24,  34 => 5,  31 => 4,  28 => 3,);
    }
}
