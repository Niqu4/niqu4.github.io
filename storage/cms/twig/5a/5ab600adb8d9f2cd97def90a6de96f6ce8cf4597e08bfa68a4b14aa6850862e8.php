<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\install-master/themes/zwiebl-zwiebl_stellar/pages/elements.htm */
class __TwigTemplate_53cd35cf10b0562494294df36c099e04968fe86cdfab846b969e073c31e2c3be extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("theme" => 298);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Text -->
<section>
    <h2>Text</h2>
    <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
        This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
        This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href=\"#\">this is a link</a>.</p>
    <hr />
    <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
    <hr />
    <h2>Heading Level 2</h2>
    <h3>Heading Level 3</h3>
    <h4>Heading Level 4</h4>
    <hr />
    <h3>Blockquote</h3>
    <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
    <h3>Preformatted</h3>
    <pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
</section>

<!-- Lists -->
<section>
    <h2>Lists</h2>
    <div class=\"row\">
        <div class=\"6u 12u\$(medium)\">
            <h3>Unordered</h3>
            <ul>
                <li>Dolor pulvinar magna etiam.</li>
                <li>Sagittis sed lorem adipiscing.</li>
                <li>Felis enim etiam feugiat.</li>
                <li>Ipsum lorem nullam consequat.</li>
            </ul>
            <h3>Alternate</h3>
            <ul class=\"alt\">
                <li>Dolor pulvinar magna etiam.</li>
                <li>Sagittis sed lorem adipiscing.</li>
                <li>Felis enim etiam feugiat.</li>
                <li>Ipsum lorem nullam consequat.</li>
            </ul>
        </div>
        <div class=\"6u\$ 12u\$(medium)\">
            <h3>Ordered</h3>
            <ol>
                <li>Dolor pulvinar etiam.</li>
                <li>Etiam vel felis viverra.</li>
                <li>Felis enim feugiat.</li>
                <li>Dolor pulvinar etiam.</li>
                <li>Etiam vel felis lorem.</li>
                <li>Felis enim et feugiat.</li>
            </ol>
            <h3>Icons</h3>
            <ul class=\"icons\">
                <li><a href=\"#\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                <li><a href=\"#\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>
                <li><a href=\"#\" class=\"icon fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                <li><a href=\"#\" class=\"icon fa-github\"><span class=\"label\">GitHub</span></a></li>
                <li><a href=\"#\" class=\"icon fa-dribbble\"><span class=\"label\">Dribbble</span></a></li>
            </ul>
            <ul class=\"icons\">
                <li><a href=\"#\" class=\"icon alt fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                <li><a href=\"#\" class=\"icon alt fa-facebook\"><span class=\"label\">Facebook</span></a></li>
                <li><a href=\"#\" class=\"icon alt fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                <li><a href=\"#\" class=\"icon alt fa-github\"><span class=\"label\">GitHub</span></a></li>
                <li><a href=\"#\" class=\"icon alt fa-dribbble\"><span class=\"label\">Dribbble</span></a></li>
            </ul>
        </div>
    </div>
    <h2>Actions</h2>
    <div class=\"row\">
        <div class=\"6u 12u\$(medium)\">
            <ul class=\"actions\">
                <li><a href=\"#\" class=\"button special\">Default</a></li>
                <li><a href=\"#\" class=\"button\">Default</a></li>
            </ul>
            <ul class=\"actions small\">
                <li><a href=\"#\" class=\"button special small\">Small</a></li>
                <li><a href=\"#\" class=\"button small\">Small</a></li>
            </ul>
            <ul class=\"actions vertical\">
                <li><a href=\"#\" class=\"button special\">Default</a></li>
                <li><a href=\"#\" class=\"button\">Default</a></li>
            </ul>
            <ul class=\"actions vertical small\">
                <li><a href=\"#\" class=\"button special small\">Small</a></li>
                <li><a href=\"#\" class=\"button small\">Small</a></li>
            </ul>
        </div>
        <div class=\"6u 12u\$(medium)\">
            <ul class=\"actions vertical\">
                <li><a href=\"#\" class=\"button special fit\">Default</a></li>
                <li><a href=\"#\" class=\"button fit\">Default</a></li>
            </ul>
            <ul class=\"actions vertical small\">
                <li><a href=\"#\" class=\"button special small fit\">Small</a></li>
                <li><a href=\"#\" class=\"button small fit\">Small</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- Table -->
<section>
    <h2>Table</h2>
    <h3>Default</h3>
    <div class=\"table-wrapper\">
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Item One</td>
                <td>Ante turpis integer aliquet porttitor.</td>
                <td>29.99</td>
            </tr>
            <tr>
                <td>Item Two</td>
                <td>Vis ac commodo adipiscing arcu aliquet.</td>
                <td>19.99</td>
            </tr>
            <tr>
                <td>Item Three</td>
                <td> Morbi faucibus arcu accumsan lorem.</td>
                <td>29.99</td>
            </tr>
            <tr>
                <td>Item Four</td>
                <td>Vitae integer tempus condimentum.</td>
                <td>19.99</td>
            </tr>
            <tr>
                <td>Item Five</td>
                <td>Ante turpis integer aliquet porttitor.</td>
                <td>29.99</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan=\"2\"></td>
                <td>100.00</td>
            </tr>
            </tfoot>
        </table>
    </div>

    <h3>Alternate</h3>
    <div class=\"table-wrapper\">
        <table class=\"alt\">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Item One</td>
                <td>Ante turpis integer aliquet porttitor.</td>
                <td>29.99</td>
            </tr>
            <tr>
                <td>Item Two</td>
                <td>Vis ac commodo adipiscing arcu aliquet.</td>
                <td>19.99</td>
            </tr>
            <tr>
                <td>Item Three</td>
                <td> Morbi faucibus arcu accumsan lorem.</td>
                <td>29.99</td>
            </tr>
            <tr>
                <td>Item Four</td>
                <td>Vitae integer tempus condimentum.</td>
                <td>19.99</td>
            </tr>
            <tr>
                <td>Item Five</td>
                <td>Ante turpis integer aliquet porttitor.</td>
                <td>29.99</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan=\"2\"></td>
                <td>100.00</td>
            </tr>
            </tfoot>
        </table>
    </div>
</section>

<!-- Buttons -->
<section>
    <h3>Buttons</h3>
    <ul class=\"actions\">
        <li><a href=\"#\" class=\"button special\">Special</a></li>
        <li><a href=\"#\" class=\"button\">Default</a></li>
    </ul>
    <ul class=\"actions\">
        <li><a href=\"#\" class=\"button big\">Big</a></li>
        <li><a href=\"#\" class=\"button\">Default</a></li>
        <li><a href=\"#\" class=\"button small\">Small</a></li>
    </ul>
    <ul class=\"actions fit\">
        <li><a href=\"#\" class=\"button special fit\">Fit</a></li>
        <li><a href=\"#\" class=\"button fit\">Fit</a></li>
        <li><a href=\"#\" class=\"button fit\">Fit</a></li>
    </ul>
    <ul class=\"actions fit small\">
        <li><a href=\"#\" class=\"button special fit small\">Fit + Small</a></li>
        <li><a href=\"#\" class=\"button fit small\">Fit + Small</a></li>
        <li><a href=\"#\" class=\"button fit small\">Fit + Small</a></li>
    </ul>
    <ul class=\"actions\">
        <li><a href=\"#\" class=\"button special icon fa-download\">Icon</a></li>
        <li><a href=\"#\" class=\"button icon fa-upload\">Icon</a></li>
        <li><a href=\"#\" class=\"button icon fa-save\">Icon</a></li>
    </ul>
    <ul class=\"actions\">
        <li><span class=\"button special disabled\">Disabled</span></li>
        <li><span class=\"button disabled\">Disabled</span></li>
    </ul>
</section>

<!-- Form -->
<section>
    <h2>Form</h2>
    <form method=\"post\" action=\"#\">
        <div class=\"row uniform\">
            <div class=\"6u 12u\$(xsmall)\">
                <input type=\"text\" name=\"demo-name\" id=\"demo-name\" value=\"\" placeholder=\"Name\" />
            </div>
            <div class=\"6u\$ 12u\$(xsmall)\">
                <input type=\"email\" name=\"demo-email\" id=\"demo-email\" value=\"\" placeholder=\"Email\" />
            </div>
            <div class=\"12u\$\">
                <div class=\"select-wrapper\">
                    <select name=\"demo-category\" id=\"demo-category\">
                        <option value=\"\">- Category -</option>
                        <option value=\"1\">Manufacturing</option>
                        <option value=\"1\">Shipping</option>
                        <option value=\"1\">Administration</option>
                        <option value=\"1\">Human Resources</option>
                    </select>
                </div>
            </div>
            <div class=\"4u 12u\$(small)\">
                <input type=\"radio\" id=\"demo-priority-low\" name=\"demo-priority\" checked>
                <label for=\"demo-priority-low\">Low</label>
            </div>
            <div class=\"4u 12u\$(small)\">
                <input type=\"radio\" id=\"demo-priority-normal\" name=\"demo-priority\">
                <label for=\"demo-priority-normal\">Normal</label>
            </div>
            <div class=\"4u\$ 12u\$(small)\">
                <input type=\"radio\" id=\"demo-priority-high\" name=\"demo-priority\">
                <label for=\"demo-priority-high\">High</label>
            </div>
            <div class=\"6u 12u\$(small)\">
                <input type=\"checkbox\" id=\"demo-copy\" name=\"demo-copy\">
                <label for=\"demo-copy\">Email me a copy</label>
            </div>
            <div class=\"6u\$ 12u\$(small)\">
                <input type=\"checkbox\" id=\"demo-human\" name=\"demo-human\" checked>
                <label for=\"demo-human\">Not a robot</label>
            </div>
            <div class=\"12u\$\">
                <textarea name=\"demo-message\" id=\"demo-message\" placeholder=\"Enter your message\" rows=\"6\"></textarea>
            </div>
            <div class=\"12u\$\">
                <ul class=\"actions\">
                    <li><input type=\"submit\" value=\"Send Message\" class=\"special\" /></li>
                    <li><input type=\"reset\" value=\"Reset\" /></li>
                </ul>
            </div>
        </div>
    </form>
</section>

<!-- Image -->
<section>
    <h2>Image</h2>
    <h3>Fit</h3>
    <div class=\"box alt\">
        <div class=\"row uniform\">
            <div class=\"12u\$\"><span class=\"image fit\"><img src=\"";
        // line 298
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic04.jpg");
        echo "\" alt=\"\" /></span></div>
            <div class=\"4u\"><span class=\"image fit\"><img src=\"";
        // line 299
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic01.jpg");
        echo "\" alt=\"\" /></span></div>
            <div class=\"4u\"><span class=\"image fit\"><img src=\"";
        // line 300
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic02.jpg");
        echo "\" alt=\"\" /></span></div>
            <div class=\"4u\$\"><span class=\"image fit\"><img src=\"";
        // line 301
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic03.jpg");
        echo "\" alt=\"\" /></span></div>
            <div class=\"4u\"><span class=\"image fit\"><img src=\"";
        // line 302
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic03.jpg");
        echo "\" alt=\"\" /></span></div>
            <div class=\"4u\"><span class=\"image fit\"><img src=\"";
        // line 303
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic01.jpg");
        echo "\" alt=\"\" /></span></div>
            <div class=\"4u\$\"><span class=\"image fit\"><img src=\"";
        // line 304
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic02.jpg");
        echo "\" alt=\"\" /></span></div>
            <div class=\"4u\"><span class=\"image fit\"><img src=\"";
        // line 305
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic02.jpg");
        echo "\" alt=\"\" /></span></div>
            <div class=\"4u\"><span class=\"image fit\"><img src=\"";
        // line 306
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic03.jpg");
        echo "\" alt=\"\" /></span></div>
            <div class=\"4u\$\"><span class=\"image fit\"><img src=\"";
        // line 307
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic01.jpg");
        echo "\" alt=\"\" /></span></div>
        </div>
    </div>
    <h3>Left &amp; Right</h3>
    <p><span class=\"image left\"><img src=\"";
        // line 311
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic05.jpg");
        echo "\" alt=\"\" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent lorem ipsum dolor sit amet veroeros consequat. Etiam tempus lorem ipsum.</p>
    <p><span class=\"image right\"><img src=\"";
        // line 312
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic06.jpg");
        echo "\" alt=\"\" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus..</p>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/pages/elements.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 312,  404 => 311,  397 => 307,  393 => 306,  389 => 305,  385 => 304,  381 => 303,  377 => 302,  373 => 301,  369 => 300,  365 => 299,  361 => 298,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Text -->
<section>
    <h2>Text</h2>
    <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
        This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
        This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href=\"#\">this is a link</a>.</p>
    <hr />
    <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
    <hr />
    <h2>Heading Level 2</h2>
    <h3>Heading Level 3</h3>
    <h4>Heading Level 4</h4>
    <hr />
    <h3>Blockquote</h3>
    <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
    <h3>Preformatted</h3>
    <pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
</section>

<!-- Lists -->
<section>
    <h2>Lists</h2>
    <div class=\"row\">
        <div class=\"6u 12u\$(medium)\">
            <h3>Unordered</h3>
            <ul>
                <li>Dolor pulvinar magna etiam.</li>
                <li>Sagittis sed lorem adipiscing.</li>
                <li>Felis enim etiam feugiat.</li>
                <li>Ipsum lorem nullam consequat.</li>
            </ul>
            <h3>Alternate</h3>
            <ul class=\"alt\">
                <li>Dolor pulvinar magna etiam.</li>
                <li>Sagittis sed lorem adipiscing.</li>
                <li>Felis enim etiam feugiat.</li>
                <li>Ipsum lorem nullam consequat.</li>
            </ul>
        </div>
        <div class=\"6u\$ 12u\$(medium)\">
            <h3>Ordered</h3>
            <ol>
                <li>Dolor pulvinar etiam.</li>
                <li>Etiam vel felis viverra.</li>
                <li>Felis enim feugiat.</li>
                <li>Dolor pulvinar etiam.</li>
                <li>Etiam vel felis lorem.</li>
                <li>Felis enim et feugiat.</li>
            </ol>
            <h3>Icons</h3>
            <ul class=\"icons\">
                <li><a href=\"#\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                <li><a href=\"#\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>
                <li><a href=\"#\" class=\"icon fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                <li><a href=\"#\" class=\"icon fa-github\"><span class=\"label\">GitHub</span></a></li>
                <li><a href=\"#\" class=\"icon fa-dribbble\"><span class=\"label\">Dribbble</span></a></li>
            </ul>
            <ul class=\"icons\">
                <li><a href=\"#\" class=\"icon alt fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                <li><a href=\"#\" class=\"icon alt fa-facebook\"><span class=\"label\">Facebook</span></a></li>
                <li><a href=\"#\" class=\"icon alt fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                <li><a href=\"#\" class=\"icon alt fa-github\"><span class=\"label\">GitHub</span></a></li>
                <li><a href=\"#\" class=\"icon alt fa-dribbble\"><span class=\"label\">Dribbble</span></a></li>
            </ul>
        </div>
    </div>
    <h2>Actions</h2>
    <div class=\"row\">
        <div class=\"6u 12u\$(medium)\">
            <ul class=\"actions\">
                <li><a href=\"#\" class=\"button special\">Default</a></li>
                <li><a href=\"#\" class=\"button\">Default</a></li>
            </ul>
            <ul class=\"actions small\">
                <li><a href=\"#\" class=\"button special small\">Small</a></li>
                <li><a href=\"#\" class=\"button small\">Small</a></li>
            </ul>
            <ul class=\"actions vertical\">
                <li><a href=\"#\" class=\"button special\">Default</a></li>
                <li><a href=\"#\" class=\"button\">Default</a></li>
            </ul>
            <ul class=\"actions vertical small\">
                <li><a href=\"#\" class=\"button special small\">Small</a></li>
                <li><a href=\"#\" class=\"button small\">Small</a></li>
            </ul>
        </div>
        <div class=\"6u 12u\$(medium)\">
            <ul class=\"actions vertical\">
                <li><a href=\"#\" class=\"button special fit\">Default</a></li>
                <li><a href=\"#\" class=\"button fit\">Default</a></li>
            </ul>
            <ul class=\"actions vertical small\">
                <li><a href=\"#\" class=\"button special small fit\">Small</a></li>
                <li><a href=\"#\" class=\"button small fit\">Small</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- Table -->
<section>
    <h2>Table</h2>
    <h3>Default</h3>
    <div class=\"table-wrapper\">
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Item One</td>
                <td>Ante turpis integer aliquet porttitor.</td>
                <td>29.99</td>
            </tr>
            <tr>
                <td>Item Two</td>
                <td>Vis ac commodo adipiscing arcu aliquet.</td>
                <td>19.99</td>
            </tr>
            <tr>
                <td>Item Three</td>
                <td> Morbi faucibus arcu accumsan lorem.</td>
                <td>29.99</td>
            </tr>
            <tr>
                <td>Item Four</td>
                <td>Vitae integer tempus condimentum.</td>
                <td>19.99</td>
            </tr>
            <tr>
                <td>Item Five</td>
                <td>Ante turpis integer aliquet porttitor.</td>
                <td>29.99</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan=\"2\"></td>
                <td>100.00</td>
            </tr>
            </tfoot>
        </table>
    </div>

    <h3>Alternate</h3>
    <div class=\"table-wrapper\">
        <table class=\"alt\">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Item One</td>
                <td>Ante turpis integer aliquet porttitor.</td>
                <td>29.99</td>
            </tr>
            <tr>
                <td>Item Two</td>
                <td>Vis ac commodo adipiscing arcu aliquet.</td>
                <td>19.99</td>
            </tr>
            <tr>
                <td>Item Three</td>
                <td> Morbi faucibus arcu accumsan lorem.</td>
                <td>29.99</td>
            </tr>
            <tr>
                <td>Item Four</td>
                <td>Vitae integer tempus condimentum.</td>
                <td>19.99</td>
            </tr>
            <tr>
                <td>Item Five</td>
                <td>Ante turpis integer aliquet porttitor.</td>
                <td>29.99</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan=\"2\"></td>
                <td>100.00</td>
            </tr>
            </tfoot>
        </table>
    </div>
</section>

<!-- Buttons -->
<section>
    <h3>Buttons</h3>
    <ul class=\"actions\">
        <li><a href=\"#\" class=\"button special\">Special</a></li>
        <li><a href=\"#\" class=\"button\">Default</a></li>
    </ul>
    <ul class=\"actions\">
        <li><a href=\"#\" class=\"button big\">Big</a></li>
        <li><a href=\"#\" class=\"button\">Default</a></li>
        <li><a href=\"#\" class=\"button small\">Small</a></li>
    </ul>
    <ul class=\"actions fit\">
        <li><a href=\"#\" class=\"button special fit\">Fit</a></li>
        <li><a href=\"#\" class=\"button fit\">Fit</a></li>
        <li><a href=\"#\" class=\"button fit\">Fit</a></li>
    </ul>
    <ul class=\"actions fit small\">
        <li><a href=\"#\" class=\"button special fit small\">Fit + Small</a></li>
        <li><a href=\"#\" class=\"button fit small\">Fit + Small</a></li>
        <li><a href=\"#\" class=\"button fit small\">Fit + Small</a></li>
    </ul>
    <ul class=\"actions\">
        <li><a href=\"#\" class=\"button special icon fa-download\">Icon</a></li>
        <li><a href=\"#\" class=\"button icon fa-upload\">Icon</a></li>
        <li><a href=\"#\" class=\"button icon fa-save\">Icon</a></li>
    </ul>
    <ul class=\"actions\">
        <li><span class=\"button special disabled\">Disabled</span></li>
        <li><span class=\"button disabled\">Disabled</span></li>
    </ul>
</section>

<!-- Form -->
<section>
    <h2>Form</h2>
    <form method=\"post\" action=\"#\">
        <div class=\"row uniform\">
            <div class=\"6u 12u\$(xsmall)\">
                <input type=\"text\" name=\"demo-name\" id=\"demo-name\" value=\"\" placeholder=\"Name\" />
            </div>
            <div class=\"6u\$ 12u\$(xsmall)\">
                <input type=\"email\" name=\"demo-email\" id=\"demo-email\" value=\"\" placeholder=\"Email\" />
            </div>
            <div class=\"12u\$\">
                <div class=\"select-wrapper\">
                    <select name=\"demo-category\" id=\"demo-category\">
                        <option value=\"\">- Category -</option>
                        <option value=\"1\">Manufacturing</option>
                        <option value=\"1\">Shipping</option>
                        <option value=\"1\">Administration</option>
                        <option value=\"1\">Human Resources</option>
                    </select>
                </div>
            </div>
            <div class=\"4u 12u\$(small)\">
                <input type=\"radio\" id=\"demo-priority-low\" name=\"demo-priority\" checked>
                <label for=\"demo-priority-low\">Low</label>
            </div>
            <div class=\"4u 12u\$(small)\">
                <input type=\"radio\" id=\"demo-priority-normal\" name=\"demo-priority\">
                <label for=\"demo-priority-normal\">Normal</label>
            </div>
            <div class=\"4u\$ 12u\$(small)\">
                <input type=\"radio\" id=\"demo-priority-high\" name=\"demo-priority\">
                <label for=\"demo-priority-high\">High</label>
            </div>
            <div class=\"6u 12u\$(small)\">
                <input type=\"checkbox\" id=\"demo-copy\" name=\"demo-copy\">
                <label for=\"demo-copy\">Email me a copy</label>
            </div>
            <div class=\"6u\$ 12u\$(small)\">
                <input type=\"checkbox\" id=\"demo-human\" name=\"demo-human\" checked>
                <label for=\"demo-human\">Not a robot</label>
            </div>
            <div class=\"12u\$\">
                <textarea name=\"demo-message\" id=\"demo-message\" placeholder=\"Enter your message\" rows=\"6\"></textarea>
            </div>
            <div class=\"12u\$\">
                <ul class=\"actions\">
                    <li><input type=\"submit\" value=\"Send Message\" class=\"special\" /></li>
                    <li><input type=\"reset\" value=\"Reset\" /></li>
                </ul>
            </div>
        </div>
    </form>
</section>

<!-- Image -->
<section>
    <h2>Image</h2>
    <h3>Fit</h3>
    <div class=\"box alt\">
        <div class=\"row uniform\">
            <div class=\"12u\$\"><span class=\"image fit\"><img src=\"{{'assets/images/pic04.jpg'|theme}}\" alt=\"\" /></span></div>
            <div class=\"4u\"><span class=\"image fit\"><img src=\"{{'assets/images/pic01.jpg'|theme}}\" alt=\"\" /></span></div>
            <div class=\"4u\"><span class=\"image fit\"><img src=\"{{'assets/images/pic02.jpg'|theme}}\" alt=\"\" /></span></div>
            <div class=\"4u\$\"><span class=\"image fit\"><img src=\"{{'assets/images/pic03.jpg'|theme}}\" alt=\"\" /></span></div>
            <div class=\"4u\"><span class=\"image fit\"><img src=\"{{'assets/images/pic03.jpg'|theme}}\" alt=\"\" /></span></div>
            <div class=\"4u\"><span class=\"image fit\"><img src=\"{{'assets/images/pic01.jpg'|theme}}\" alt=\"\" /></span></div>
            <div class=\"4u\$\"><span class=\"image fit\"><img src=\"{{'assets/images/pic02.jpg'|theme}}\" alt=\"\" /></span></div>
            <div class=\"4u\"><span class=\"image fit\"><img src=\"{{'assets/images/pic02.jpg'|theme}}\" alt=\"\" /></span></div>
            <div class=\"4u\"><span class=\"image fit\"><img src=\"{{'assets/images/pic03.jpg'|theme}}\" alt=\"\" /></span></div>
            <div class=\"4u\$\"><span class=\"image fit\"><img src=\"{{'assets/images/pic01.jpg'|theme}}\" alt=\"\" /></span></div>
        </div>
    </div>
    <h3>Left &amp; Right</h3>
    <p><span class=\"image left\"><img src=\"{{'assets/images/pic05.jpg'|theme}}\" alt=\"\" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent lorem ipsum dolor sit amet veroeros consequat. Etiam tempus lorem ipsum.</p>
    <p><span class=\"image right\"><img src=\"{{'assets/images/pic06.jpg'|theme}}\" alt=\"\" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus..</p>
</section>", "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/pages/elements.htm", "");
    }
}
