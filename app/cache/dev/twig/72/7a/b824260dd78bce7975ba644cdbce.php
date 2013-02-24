<?php

/* ImbuzzitApiBundle:User:index.html.twig */
class __TwigTemplate_727ab824260dd78bce7975ba644cdbce extends Twig_Template
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
        // line 1
        echo "<h1>User list</h1>

<table class=\"records_list\">
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
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "        ";
            $context["sexe"] = ("form.sexe." . $this->getAttribute($this->getContext($context, "entity"), "sexe"));
            // line 23
            echo "        <tr>
            <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_user_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username"), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "firstname"), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "isActive"), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            if ($this->getAttribute($this->getContext($context, "entity"), "birthday")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "birthday"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "sexe"), array(), "user"), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            if ($this->getAttribute($this->getContext($context, "entity"), "accountbirthday")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "accountbirthday"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "city"), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            if ($this->getAttribute($this->getContext($context, "entity"), "lastconnect")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lastconnect"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_user_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_user_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_user_new"), "html", null, true);
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ImbuzzitApiBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 47,  112 => 41,  97 => 34,  87 => 32,  77 => 30,  69 => 28,  65 => 27,  40 => 12,  23 => 3,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 15,  61 => 26,  47 => 9,  105 => 24,  93 => 33,  76 => 16,  72 => 14,  68 => 12,  27 => 4,  91 => 20,  84 => 28,  94 => 39,  88 => 6,  79 => 17,  59 => 22,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  58 => 9,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 52,  123 => 41,  120 => 40,  115 => 39,  106 => 38,  101 => 32,  96 => 21,  83 => 31,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 18,  50 => 10,  43 => 7,  41 => 21,  37 => 8,  35 => 5,  32 => 4,  29 => 4,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 31,  95 => 34,  92 => 33,  89 => 19,  85 => 25,  81 => 40,  73 => 29,  64 => 17,  60 => 23,  57 => 25,  54 => 10,  51 => 24,  48 => 23,  45 => 22,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
