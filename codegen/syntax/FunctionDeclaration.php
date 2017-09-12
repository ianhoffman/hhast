<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<034a82bd5308498874d3c69d830305b3>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class FunctionDeclaration extends EditableSyntax {

  private EditableSyntax $_attribute_spec;
  private EditableSyntax $_declaration_header;
  private EditableSyntax $_body;

  public function __construct(
    EditableSyntax $attribute_spec,
    EditableSyntax $declaration_header,
    EditableSyntax $body,
  ) {
    parent::__construct('function_declaration');
    $this->_attribute_spec = $attribute_spec;
    $this->_declaration_header = $declaration_header;
    $this->_body = $body;
  }

  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $attribute_spec = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['function_attribute_spec'],
      $position,
      $source,
    );
    $position += $attribute_spec->width();
    $declaration_header = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['function_declaration_header'],
      $position,
      $source,
    );
    $position += $declaration_header->width();
    $body = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['function_body'],
      $position,
      $source,
    );
    $position += $body->width();
    return new self($attribute_spec, $declaration_header, $body);
  }

  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'attribute_spec' => $this->_attribute_spec;
    yield 'declaration_header' => $this->_declaration_header;
    yield 'body' => $this->_body;
  }

  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $attribute_spec = $this->_attribute_spec->rewrite($rewriter, $parents);
    $declaration_header = $this->_declaration_header->rewrite($rewriter, $parents);
    $body = $this->_body->rewrite($rewriter, $parents);
    if (
      $attribute_spec === $this->_attribute_spec &&
      $declaration_header === $this->_declaration_header &&
      $body === $this->_body
    ) {
      return $this;
    }
    return new self($attribute_spec, $declaration_header, $body);
  }

  public function getAttributeSpecUNTYPED(): EditableSyntax {
    return $this->_attribute_spec;
  }

  public function withAttributeSpec(EditableSyntax $value): this {
    if ($value === $this->_attribute_spec) {
      return $this;
    }
    return new self($value, $this->_declaration_header, $this->_body);
  }

  public function hasAttributeSpec(): bool {
    return !$this->_attribute_spec->is_missing();
  }

  public function getAttributeSpec(): ?AttributeSpecification {
    if ($this->_attribute_spec->is_missing()) {
      return null;
    }
    return TypeAssert::isInstanceOf(AttributeSpecification::class, $this->_attribute_spec);
  }

  public function getAttributeSpecx(): AttributeSpecification {
    return TypeAssert::isInstanceOf(AttributeSpecification::class, $this->_attribute_spec);
  }

  public function getDeclarationHeaderUNTYPED(): EditableSyntax {
    return $this->_declaration_header;
  }

  public function withDeclarationHeader(EditableSyntax $value): this {
    if ($value === $this->_declaration_header) {
      return $this;
    }
    return new self($this->_attribute_spec, $value, $this->_body);
  }

  public function hasDeclarationHeader(): bool {
    return !$this->_declaration_header->is_missing();
  }

  public function getDeclarationHeader(): FunctionDeclarationHeader {
    return TypeAssert::isInstanceOf(FunctionDeclarationHeader::class, $this->_declaration_header);
  }

  public function getBodyUNTYPED(): EditableSyntax {
    return $this->_body;
  }

  public function withBody(EditableSyntax $value): this {
    if ($value === $this->_body) {
      return $this;
    }
    return new self($this->_attribute_spec, $this->_declaration_header, $value);
  }

  public function hasBody(): bool {
    return !$this->_body->is_missing();
  }

  public function getBody(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_body);
  }
}