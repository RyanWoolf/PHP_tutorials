<?php
abstract class AbstractPageTemplate
{
    // 이 세가지 메소드를 자식클라스에게 정의하라고 위임함.
    protected abstract function header();
    protected abstract function article();
    protected abstract function footer();

    protected final function template()
    {
        $result = $this->header();
        $result .= $this->article();
        $result .= $this->footer();
        return $result;
    }

    public function render()
    {
        return $this->template();
    }
}
class TextPage extends AbstractPageTemplate
{
    protected function header()
    {
        return "PHP\n";
    }
    protected function article()
    {
        return "PHP: Hypertext Preprocessor\n";
    }
    protected function footer()
    {
        return "website is php.net\n";
    }
}
class HtmlPage extends AbstractPageTemplate
{
    protected function header()
    {
        return "<header>PHP</header>\n";
    }
    protected function article()
    {
        return "<article>PHP: Hypertext Preprocessor</article>\n";
    }
    protected function footer()
    {
        return "<footer>website is php.net</footer>\n";
    }
    public function render()
    {
        $result = '<html>';
        $result .= $this->template();
        return $result.'</html>';
    }
}
// Text 형식으로 보여준다
echo '<h1>text</h1>';
$text = new TextPage();
echo $text->render();
 
// HTML 형식으로 보여준다.
echo '<h1>html</h1>';
$html = new HtmlPage();
echo $html->render();


?>