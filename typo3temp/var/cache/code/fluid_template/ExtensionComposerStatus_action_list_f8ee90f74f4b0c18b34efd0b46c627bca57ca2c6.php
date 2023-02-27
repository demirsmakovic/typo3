<?php

class ExtensionComposerStatus_action_list_f8ee90f74f4b0c18b34efd0b46c627bca57ca2c6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'main';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'extensionComposerStatus';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['key'] = NULL;
$arguments111['id'] = NULL;
$arguments111['default'] = NULL;
$arguments111['arguments'] = NULL;
$arguments111['extensionName'] = NULL;
$arguments111['languageKey'] = NULL;
$arguments111['alternativeLanguageKeys'] = NULL;
$arguments111['key'] = 'extensionList.composerStatus.information';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output110 .= '</p>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['key'] = NULL;
$arguments113['id'] = NULL;
$arguments113['default'] = NULL;
$arguments113['arguments'] = NULL;
$arguments113['extensionName'] = NULL;
$arguments113['languageKey'] = NULL;
$arguments113['alternativeLanguageKeys'] = NULL;
$arguments113['key'] = 'extensionList.composerStatus.thirdParty';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext)]);

$output110 .= '</p>
                <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['key'] = NULL;
$arguments115['id'] = NULL;
$arguments115['default'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['extensionName'] = NULL;
$arguments115['languageKey'] = NULL;
$arguments115['alternativeLanguageKeys'] = NULL;
$arguments115['key'] = 'extensionList.composerStatus.missingManifest';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext)]);

$output110 .= '</h4>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['key'] = NULL;
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$arguments117['languageKey'] = NULL;
$arguments117['alternativeLanguageKeys'] = NULL;
$arguments117['key'] = 'extensionList.composerStatus.terRequest';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output110 .= '</p>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['key'] = NULL;
$arguments119['id'] = NULL;
$arguments119['default'] = NULL;
$arguments119['arguments'] = NULL;
$arguments119['extensionName'] = NULL;
$arguments119['languageKey'] = NULL;
$arguments119['alternativeLanguageKeys'] = NULL;
$arguments119['key'] = 'extensionList.composerStatus.additionalInformation';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext)]);

$output110 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['parameter'] = NULL;
$arguments121['target'] = '';
$arguments121['class'] = '';
$arguments121['title'] = '';
$arguments121['language'] = NULL;
$arguments121['additionalParams'] = '';
$arguments121['additionalAttributes'] = array (
);
$arguments121['useCacheHash'] = NULL;
$arguments121['addQueryString'] = false;
$arguments121['addQueryStringMethod'] = 'GET';
$arguments121['addQueryStringExclude'] = '';
$arguments121['absolute'] = false;
$arguments121['parts-as'] = 'typoLinkParts';
$arguments121['parameter'] = 'https://extensions.typo3.org/help/composer-support';

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output110 .= '.</p>
            ';
return $output110;
};
$arguments108 = array();
$arguments108['message'] = NULL;
$arguments108['title'] = NULL;
$arguments108['state'] = -2;
$arguments108['iconName'] = NULL;
$arguments108['disableIcon'] = false;
$arguments108['title'] = 'Invalid composer.json files in extensions';
$arguments108['state'] = -1;
$renderChildrenClosure109 = ($arguments108['message'] !== null) ? function() use ($arguments108) { return $arguments108['message']; } : $renderChildrenClosure109;
$output107 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
            <div class="table-fit">
                <table id="typo3-extension-list" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th data-filterable>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['key'] = NULL;
$arguments123['id'] = NULL;
$arguments123['default'] = NULL;
$arguments123['arguments'] = NULL;
$arguments123['extensionName'] = NULL;
$arguments123['languageKey'] = NULL;
$arguments123['alternativeLanguageKeys'] = NULL;
$arguments123['key'] = 'extensionList.header.extensionName';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext)]);

$output107 .= '</th>
                            <th data-filterable data-sort-default>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['key'] = NULL;
$arguments125['id'] = NULL;
$arguments125['default'] = NULL;
$arguments125['arguments'] = NULL;
$arguments125['extensionName'] = NULL;
$arguments125['languageKey'] = NULL;
$arguments125['alternativeLanguageKeys'] = NULL;
$arguments125['key'] = 'extensionList.header.extensionKey';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext)]);

$output107 .= '</th>
                            <th data-filterable>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['key'] = NULL;
$arguments127['id'] = NULL;
$arguments127['default'] = NULL;
$arguments127['arguments'] = NULL;
$arguments127['extensionName'] = NULL;
$arguments127['languageKey'] = NULL;
$arguments127['alternativeLanguageKeys'] = NULL;
$arguments127['key'] = 'extensionList.header.extensionDeficit';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext)]);

$output107 .= '</th>
                            <th data-sort-method="none">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['key'] = NULL;
$arguments129['id'] = NULL;
$arguments129['default'] = NULL;
$arguments129['arguments'] = NULL;
$arguments129['extensionName'] = NULL;
$arguments129['languageKey'] = NULL;
$arguments129['alternativeLanguageKeys'] = NULL;
$arguments129['key'] = 'extensionList.header.extensionActions';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output107 .= '</th>
                        </tr>
                    </thead>
                    <tbody>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
                            <tr role="row" id="';
$array135 = array (
);
$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array135)]);

$output134 .= '">
                                <td>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['section'] = NULL;
$arguments136['partial'] = NULL;
$arguments136['delegate'] = NULL;
$arguments136['renderable'] = NULL;
$arguments136['arguments'] = array (
);
$arguments136['optional'] = false;
$arguments136['default'] = NULL;
$arguments136['contentAs'] = NULL;
$arguments136['debug'] = true;
$arguments136['section'] = 'Icon';
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array139);
$arguments136['arguments'] = $array138;

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output134 .= '
                                    <a href="';
$array140 = array (
);
$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array140)]);

$output134 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['key'] = NULL;
$arguments141['id'] = NULL;
$arguments141['default'] = NULL;
$arguments141['arguments'] = NULL;
$arguments141['extensionName'] = NULL;
$arguments141['languageKey'] = NULL;
$arguments141['alternativeLanguageKeys'] = NULL;
$arguments141['key'] = 'extensionList.showComposerProposal';

$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext)]);

$output134 .= '" class="btn btn-link p-0">
                                        ';
$array143 = array (
);
$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array143)]);

$output134 .= '
                                    </a>
                                </td>
                                <td>
                                    ';
$array144 = array (
);
$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array144)]);

$output134 .= '
                                </td>
                                <td>
                                    <span class="label ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['then'] = NULL;
$arguments145['else'] = NULL;
$arguments145['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array147 = array();
$array148 = array (
);$array147['0'] = $renderingContext->getVariableProvider()->getByPath('extension.deficit', $array148);
$array147['1'] = ' == 2';

$expression149 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments145['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression149(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)
					),
					$renderingContext
				);
$arguments145['then'] = 'label-warning';
$arguments145['else'] = 'label-danger';

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output134 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['key'] = NULL;
$arguments150['id'] = NULL;
$arguments150['default'] = NULL;
$arguments150['arguments'] = NULL;
$arguments150['extensionName'] = NULL;
$arguments150['languageKey'] = NULL;
$arguments150['alternativeLanguageKeys'] = NULL;
$output152 = '';

$output152 .= 'extensionComposerStatus.deficit.';
$array153 = array (
);
$output152 .= $renderingContext->getVariableProvider()->getByPath('extension.deficit', $array153);

$output152 .= '.short';
$arguments150['key'] = $output152;

$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext)]);

$output134 .= '</span>
                                </td>
                                <td>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
                                            <a href="';
$array179 = array (
);
$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array179)]);

$output178 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['key'] = NULL;
$arguments180['id'] = NULL;
$arguments180['default'] = NULL;
$arguments180['arguments'] = NULL;
$arguments180['extensionName'] = NULL;
$arguments180['languageKey'] = NULL;
$arguments180['alternativeLanguageKeys'] = NULL;
$arguments180['key'] = 'extensionList.showComposerProposal';

$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext)]);

$output178 .= '" class="btn btn-default">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['identifier'] = NULL;
$arguments182['size'] = 'small';
$arguments182['overlay'] = NULL;
$arguments182['state'] = 'default';
$arguments182['alternativeMarkupIdentifier'] = NULL;
$arguments182['identifier'] = 'actions-document-synchronize';

$output178 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output178 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['key'] = NULL;
$arguments184['id'] = NULL;
$arguments184['default'] = NULL;
$arguments184['arguments'] = NULL;
$arguments184['extensionName'] = NULL;
$arguments184['languageKey'] = NULL;
$arguments184['alternativeLanguageKeys'] = NULL;
$arguments184['key'] = 'extensionList.showComposerProposal';

$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext)]);

$output178 .= '
                                            </a>
                                        ';
return $output178;
};
$arguments176 = array();

$output175 .= '';

$output175 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
                                            <a href="';
$array189 = array (
);
$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array189)]);

$output188 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['key'] = NULL;
$arguments190['id'] = NULL;
$arguments190['default'] = NULL;
$arguments190['arguments'] = NULL;
$arguments190['extensionName'] = NULL;
$arguments190['languageKey'] = NULL;
$arguments190['alternativeLanguageKeys'] = NULL;
$arguments190['key'] = 'extensionList.fetchComposerProposal.details';

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext)]);

$output188 .= '" class="btn btn-warning">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['identifier'] = NULL;
$arguments192['size'] = 'small';
$arguments192['overlay'] = NULL;
$arguments192['state'] = 'default';
$arguments192['alternativeMarkupIdentifier'] = NULL;
$arguments192['identifier'] = 'actions-document-synchronize';

$output188 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output188 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['key'] = NULL;
$arguments194['id'] = NULL;
$arguments194['default'] = NULL;
$arguments194['arguments'] = NULL;
$arguments194['extensionName'] = NULL;
$arguments194['languageKey'] = NULL;
$arguments194['alternativeLanguageKeys'] = NULL;
$arguments194['key'] = 'extensionList.fetchComposerProposal';

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext)]);

$output188 .= '
                                            </a>
                                        ';
return $output188;
};
$arguments186 = array();
$arguments186['if'] = NULL;

$output175 .= '';

$output175 .= '
                                    ';
return $output175;
};
$arguments154 = array();
$arguments154['then'] = NULL;
$arguments154['else'] = NULL;
$arguments154['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array172 = array();
$array173 = array (
);$array172['0'] = $renderingContext->getVariableProvider()->getByPath('extension.deficit', $array173);
$array172['1'] = ' == 2';

$expression174 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments154['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression174(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);
$arguments154['__thenClosure'] = function() use ($renderingContext, $self) {
$output156 = '';

$output156 .= '
                                            <a href="';
$array157 = array (
);
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array157)]);

$output156 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$arguments158['languageKey'] = NULL;
$arguments158['alternativeLanguageKeys'] = NULL;
$arguments158['key'] = 'extensionList.showComposerProposal';

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext)]);

$output156 .= '" class="btn btn-default">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['identifier'] = NULL;
$arguments160['size'] = 'small';
$arguments160['overlay'] = NULL;
$arguments160['state'] = 'default';
$arguments160['alternativeMarkupIdentifier'] = NULL;
$arguments160['identifier'] = 'actions-document-synchronize';

$output156 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output156 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['key'] = NULL;
$arguments162['id'] = NULL;
$arguments162['default'] = NULL;
$arguments162['arguments'] = NULL;
$arguments162['extensionName'] = NULL;
$arguments162['languageKey'] = NULL;
$arguments162['alternativeLanguageKeys'] = NULL;
$arguments162['key'] = 'extensionList.showComposerProposal';

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext)]);

$output156 .= '
                                            </a>
                                        ';
return $output156;
};
$arguments154['__elseClosures'][] = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
                                            <a href="';
$array165 = array (
);
$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array165)]);

$output164 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['key'] = NULL;
$arguments166['id'] = NULL;
$arguments166['default'] = NULL;
$arguments166['arguments'] = NULL;
$arguments166['extensionName'] = NULL;
$arguments166['languageKey'] = NULL;
$arguments166['alternativeLanguageKeys'] = NULL;
$arguments166['key'] = 'extensionList.fetchComposerProposal.details';

$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext)]);

$output164 .= '" class="btn btn-warning">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['identifier'] = NULL;
$arguments168['size'] = 'small';
$arguments168['overlay'] = NULL;
$arguments168['state'] = 'default';
$arguments168['alternativeMarkupIdentifier'] = NULL;
$arguments168['identifier'] = 'actions-document-synchronize';

$output164 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output164 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['key'] = NULL;
$arguments170['id'] = NULL;
$arguments170['default'] = NULL;
$arguments170['arguments'] = NULL;
$arguments170['extensionName'] = NULL;
$arguments170['languageKey'] = NULL;
$arguments170['alternativeLanguageKeys'] = NULL;
$arguments170['key'] = 'extensionList.fetchComposerProposal';

$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext)]);

$output164 .= '
                                            </a>
                                        ';
return $output164;
};

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output134 .= '
                                </td>
                            </tr>
                        ';
return $output134;
};
$arguments131 = array();
$arguments131['each'] = NULL;
$arguments131['as'] = NULL;
$arguments131['key'] = NULL;
$arguments131['reverse'] = false;
$arguments131['iteration'] = NULL;
$array133 = array (
);$arguments131['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array133);
$arguments131['as'] = 'extension';
$arguments131['key'] = 'extensionKey';

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output107 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output107;
};
$arguments105 = array();

$output104 .= '';

$output104 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['message'] = NULL;
$arguments199['title'] = NULL;
$arguments199['state'] = -2;
$arguments199['iconName'] = NULL;
$arguments199['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['key'] = NULL;
$arguments201['id'] = NULL;
$arguments201['default'] = NULL;
$arguments201['arguments'] = NULL;
$arguments201['extensionName'] = NULL;
$arguments201['languageKey'] = NULL;
$arguments201['alternativeLanguageKeys'] = NULL;
$arguments201['key'] = 'extensionComposerStatus.nothingToUpdate.title';
$arguments199['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['key'] = NULL;
$arguments203['id'] = NULL;
$arguments203['default'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['extensionName'] = NULL;
$arguments203['languageKey'] = NULL;
$arguments203['alternativeLanguageKeys'] = NULL;
$arguments203['key'] = 'extensionComposerStatus.nothingToUpdate.message.multiple';
$arguments199['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext)]);
$arguments199['state'] = -1;
$renderChildrenClosure200 = ($arguments199['message'] !== null) ? function() use ($arguments199) { return $arguments199['message']; } : $renderChildrenClosure200;
$output198 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '
        ';
return $output198;
};
$arguments196 = array();
$arguments196['if'] = NULL;

$output104 .= '';

$output104 .= '
    ';
return $output104;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['0'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array102);

$expression103 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'extensionList.composerStatus.information';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output8 .= '</p>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'extensionList.composerStatus.thirdParty';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output8 .= '</p>
                <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['languageKey'] = NULL;
$arguments13['alternativeLanguageKeys'] = NULL;
$arguments13['key'] = 'extensionList.composerStatus.missingManifest';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output8 .= '</h4>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['languageKey'] = NULL;
$arguments15['alternativeLanguageKeys'] = NULL;
$arguments15['key'] = 'extensionList.composerStatus.terRequest';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output8 .= '</p>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'extensionList.composerStatus.additionalInformation';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output8 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['parameter'] = NULL;
$arguments19['target'] = '';
$arguments19['class'] = '';
$arguments19['title'] = '';
$arguments19['language'] = NULL;
$arguments19['additionalParams'] = '';
$arguments19['additionalAttributes'] = array (
);
$arguments19['useCacheHash'] = NULL;
$arguments19['addQueryString'] = false;
$arguments19['addQueryStringMethod'] = 'GET';
$arguments19['addQueryStringExclude'] = '';
$arguments19['absolute'] = false;
$arguments19['parts-as'] = 'typoLinkParts';
$arguments19['parameter'] = 'https://extensions.typo3.org/help/composer-support';

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output8 .= '.</p>
            ';
return $output8;
};
$arguments6 = array();
$arguments6['message'] = NULL;
$arguments6['title'] = NULL;
$arguments6['state'] = -2;
$arguments6['iconName'] = NULL;
$arguments6['disableIcon'] = false;
$arguments6['title'] = 'Invalid composer.json files in extensions';
$arguments6['state'] = -1;
$renderChildrenClosure7 = ($arguments6['message'] !== null) ? function() use ($arguments6) { return $arguments6['message']; } : $renderChildrenClosure7;
$output5 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
            <div class="table-fit">
                <table id="typo3-extension-list" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th data-filterable>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$arguments21['key'] = 'extensionList.header.extensionName';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output5 .= '</th>
                            <th data-filterable data-sort-default>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$arguments23['key'] = 'extensionList.header.extensionKey';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output5 .= '</th>
                            <th data-filterable>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['languageKey'] = NULL;
$arguments25['alternativeLanguageKeys'] = NULL;
$arguments25['key'] = 'extensionList.header.extensionDeficit';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output5 .= '</th>
                            <th data-sort-method="none">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['languageKey'] = NULL;
$arguments27['alternativeLanguageKeys'] = NULL;
$arguments27['key'] = 'extensionList.header.extensionActions';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output5 .= '</th>
                        </tr>
                    </thead>
                    <tbody>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                            <tr role="row" id="';
$array33 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array33)]);

$output32 .= '">
                                <td>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['section'] = NULL;
$arguments34['partial'] = NULL;
$arguments34['delegate'] = NULL;
$arguments34['renderable'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['optional'] = false;
$arguments34['default'] = NULL;
$arguments34['contentAs'] = NULL;
$arguments34['debug'] = true;
$arguments34['section'] = 'Icon';
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array37);
$arguments34['arguments'] = $array36;

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output32 .= '
                                    <a href="';
$array38 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array38)]);

$output32 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['key'] = NULL;
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['languageKey'] = NULL;
$arguments39['alternativeLanguageKeys'] = NULL;
$arguments39['key'] = 'extensionList.showComposerProposal';

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output32 .= '" class="btn btn-link p-0">
                                        ';
$array41 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array41)]);

$output32 .= '
                                    </a>
                                </td>
                                <td>
                                    ';
$array42 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array42)]);

$output32 .= '
                                </td>
                                <td>
                                    <span class="label ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['0'] = $renderingContext->getVariableProvider()->getByPath('extension.deficit', $array46);
$array45['1'] = ' == 2';

$expression47 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression47(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
$arguments43['then'] = 'label-warning';
$arguments43['else'] = 'label-danger';

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output32 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['key'] = NULL;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['languageKey'] = NULL;
$arguments48['alternativeLanguageKeys'] = NULL;
$output50 = '';

$output50 .= 'extensionComposerStatus.deficit.';
$array51 = array (
);
$output50 .= $renderingContext->getVariableProvider()->getByPath('extension.deficit', $array51);

$output50 .= '.short';
$arguments48['key'] = $output50;

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output32 .= '</span>
                                </td>
                                <td>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                                            <a href="';
$array77 = array (
);
$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array77)]);

$output76 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['key'] = NULL;
$arguments78['id'] = NULL;
$arguments78['default'] = NULL;
$arguments78['arguments'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['languageKey'] = NULL;
$arguments78['alternativeLanguageKeys'] = NULL;
$arguments78['key'] = 'extensionList.showComposerProposal';

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output76 .= '" class="btn btn-default">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['identifier'] = NULL;
$arguments80['size'] = 'small';
$arguments80['overlay'] = NULL;
$arguments80['state'] = 'default';
$arguments80['alternativeMarkupIdentifier'] = NULL;
$arguments80['identifier'] = 'actions-document-synchronize';

$output76 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output76 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['key'] = NULL;
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$arguments82['languageKey'] = NULL;
$arguments82['alternativeLanguageKeys'] = NULL;
$arguments82['key'] = 'extensionList.showComposerProposal';

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);

$output76 .= '
                                            </a>
                                        ';
return $output76;
};
$arguments74 = array();

$output73 .= '';

$output73 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
                                            <a href="';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array87)]);

$output86 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['key'] = NULL;
$arguments88['id'] = NULL;
$arguments88['default'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['languageKey'] = NULL;
$arguments88['alternativeLanguageKeys'] = NULL;
$arguments88['key'] = 'extensionList.fetchComposerProposal.details';

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);

$output86 .= '" class="btn btn-warning">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['identifier'] = NULL;
$arguments90['size'] = 'small';
$arguments90['overlay'] = NULL;
$arguments90['state'] = 'default';
$arguments90['alternativeMarkupIdentifier'] = NULL;
$arguments90['identifier'] = 'actions-document-synchronize';

$output86 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output86 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['key'] = NULL;
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$arguments92['languageKey'] = NULL;
$arguments92['alternativeLanguageKeys'] = NULL;
$arguments92['key'] = 'extensionList.fetchComposerProposal';

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext)]);

$output86 .= '
                                            </a>
                                        ';
return $output86;
};
$arguments84 = array();
$arguments84['if'] = NULL;

$output73 .= '';

$output73 .= '
                                    ';
return $output73;
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array70 = array();
$array71 = array (
);$array70['0'] = $renderingContext->getVariableProvider()->getByPath('extension.deficit', $array71);
$array70['1'] = ' == 2';

$expression72 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);
$arguments52['__thenClosure'] = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
                                            <a href="';
$array55 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array55)]);

$output54 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['languageKey'] = NULL;
$arguments56['alternativeLanguageKeys'] = NULL;
$arguments56['key'] = 'extensionList.showComposerProposal';

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output54 .= '" class="btn btn-default">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['identifier'] = NULL;
$arguments58['size'] = 'small';
$arguments58['overlay'] = NULL;
$arguments58['state'] = 'default';
$arguments58['alternativeMarkupIdentifier'] = NULL;
$arguments58['identifier'] = 'actions-document-synchronize';

$output54 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output54 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$arguments60['key'] = 'extensionList.showComposerProposal';

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output54 .= '
                                            </a>
                                        ';
return $output54;
};
$arguments52['__elseClosures'][] = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                                            <a href="';
$array63 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array63)]);

$output62 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['languageKey'] = NULL;
$arguments64['alternativeLanguageKeys'] = NULL;
$arguments64['key'] = 'extensionList.fetchComposerProposal.details';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output62 .= '" class="btn btn-warning">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['identifier'] = NULL;
$arguments66['size'] = 'small';
$arguments66['overlay'] = NULL;
$arguments66['state'] = 'default';
$arguments66['alternativeMarkupIdentifier'] = NULL;
$arguments66['identifier'] = 'actions-document-synchronize';

$output62 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output62 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['key'] = NULL;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$arguments68['languageKey'] = NULL;
$arguments68['alternativeLanguageKeys'] = NULL;
$arguments68['key'] = 'extensionList.fetchComposerProposal';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output62 .= '
                                            </a>
                                        ';
return $output62;
};

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output32 .= '
                                </td>
                            </tr>
                        ';
return $output32;
};
$arguments29 = array();
$arguments29['each'] = NULL;
$arguments29['as'] = NULL;
$arguments29['key'] = NULL;
$arguments29['reverse'] = false;
$arguments29['iteration'] = NULL;
$array31 = array (
);$arguments29['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array31);
$arguments29['as'] = 'extension';
$arguments29['key'] = 'extensionKey';

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output5 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output5;
};
$arguments3['__elseClosures'][] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['message'] = NULL;
$arguments95['title'] = NULL;
$arguments95['state'] = -2;
$arguments95['iconName'] = NULL;
$arguments95['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['key'] = NULL;
$arguments97['id'] = NULL;
$arguments97['default'] = NULL;
$arguments97['arguments'] = NULL;
$arguments97['extensionName'] = NULL;
$arguments97['languageKey'] = NULL;
$arguments97['alternativeLanguageKeys'] = NULL;
$arguments97['key'] = 'extensionComposerStatus.nothingToUpdate.title';
$arguments95['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['key'] = NULL;
$arguments99['id'] = NULL;
$arguments99['default'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['languageKey'] = NULL;
$arguments99['alternativeLanguageKeys'] = NULL;
$arguments99['key'] = 'extensionComposerStatus.nothingToUpdate.message.multiple';
$arguments95['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);
$arguments95['state'] = -1;
$renderChildrenClosure96 = ($arguments95['message'] !== null) ? function() use ($arguments95) { return $arguments95['message']; } : $renderChildrenClosure96;
$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
        ';
return $output94;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * section Icon
 */
public function section_716f63b96e0c263222949a3b8a00cdb4f46d3183(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output205 = '';

$output205 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
            <img class="extension-icon" src="';
$array221 = array (
);
$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.icon', $array221)]);

$output220 .= '" alt="';
$array222 = array (
);
$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array222)]);

$output220 .= '" />
        ';
return $output220;
};
$arguments218 = array();

$output217 .= '';

$output217 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['identifier'] = NULL;
$arguments226['size'] = 'small';
$arguments226['overlay'] = NULL;
$arguments226['state'] = 'default';
$arguments226['alternativeMarkupIdentifier'] = NULL;
$arguments226['identifier'] = 'empty-empty';

$output225 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output225 .= '
        ';
return $output225;
};
$arguments223 = array();
$arguments223['if'] = NULL;

$output217 .= '';

$output217 .= '
    ';
return $output217;
};
$arguments206 = array();
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$arguments206['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array214 = array();
$array215 = array (
);$array214['0'] = $renderingContext->getVariableProvider()->getByPath('extension.icon', $array215);

$expression216 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments206['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression216(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array214)
					),
					$renderingContext
				);
$arguments206['__thenClosure'] = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
            <img class="extension-icon" src="';
$array209 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.icon', $array209)]);

$output208 .= '" alt="';
$array210 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array210)]);

$output208 .= '" />
        ';
return $output208;
};
$arguments206['__elseClosures'][] = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['identifier'] = NULL;
$arguments212['size'] = 'small';
$arguments212['overlay'] = NULL;
$arguments212['state'] = 'default';
$arguments212['alternativeMarkupIdentifier'] = NULL;
$arguments212['identifier'] = 'empty-empty';

$output211 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '
        ';
return $output211;
};

$output205 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '
';

return $output205;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output228 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['name'] = NULL;
$arguments229['name'] = 'main';

$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output228 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments234 = array();
$arguments234['key'] = NULL;
$arguments234['id'] = NULL;
$arguments234['default'] = NULL;
$arguments234['arguments'] = NULL;
$arguments234['extensionName'] = NULL;
$arguments234['languageKey'] = NULL;
$arguments234['alternativeLanguageKeys'] = NULL;
$arguments234['key'] = 'extensionComposerStatus';

$output233 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext)]);

$output233 .= '</h1>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$output337 = '';

$output337 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments344 = array();
$arguments344['key'] = NULL;
$arguments344['id'] = NULL;
$arguments344['default'] = NULL;
$arguments344['arguments'] = NULL;
$arguments344['extensionName'] = NULL;
$arguments344['languageKey'] = NULL;
$arguments344['alternativeLanguageKeys'] = NULL;
$arguments344['key'] = 'extensionList.composerStatus.information';

$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext)]);

$output343 .= '</p>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['key'] = NULL;
$arguments346['id'] = NULL;
$arguments346['default'] = NULL;
$arguments346['arguments'] = NULL;
$arguments346['extensionName'] = NULL;
$arguments346['languageKey'] = NULL;
$arguments346['alternativeLanguageKeys'] = NULL;
$arguments346['key'] = 'extensionList.composerStatus.thirdParty';

$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext)]);

$output343 .= '</p>
                <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments348 = array();
$arguments348['key'] = NULL;
$arguments348['id'] = NULL;
$arguments348['default'] = NULL;
$arguments348['arguments'] = NULL;
$arguments348['extensionName'] = NULL;
$arguments348['languageKey'] = NULL;
$arguments348['alternativeLanguageKeys'] = NULL;
$arguments348['key'] = 'extensionList.composerStatus.missingManifest';

$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext)]);

$output343 .= '</h4>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments350 = array();
$arguments350['key'] = NULL;
$arguments350['id'] = NULL;
$arguments350['default'] = NULL;
$arguments350['arguments'] = NULL;
$arguments350['extensionName'] = NULL;
$arguments350['languageKey'] = NULL;
$arguments350['alternativeLanguageKeys'] = NULL;
$arguments350['key'] = 'extensionList.composerStatus.terRequest';

$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext)]);

$output343 .= '</p>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments352 = array();
$arguments352['key'] = NULL;
$arguments352['id'] = NULL;
$arguments352['default'] = NULL;
$arguments352['arguments'] = NULL;
$arguments352['extensionName'] = NULL;
$arguments352['languageKey'] = NULL;
$arguments352['alternativeLanguageKeys'] = NULL;
$arguments352['key'] = 'extensionList.composerStatus.additionalInformation';

$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext)]);

$output343 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments354 = array();
$arguments354['parameter'] = NULL;
$arguments354['target'] = '';
$arguments354['class'] = '';
$arguments354['title'] = '';
$arguments354['language'] = NULL;
$arguments354['additionalParams'] = '';
$arguments354['additionalAttributes'] = array (
);
$arguments354['useCacheHash'] = NULL;
$arguments354['addQueryString'] = false;
$arguments354['addQueryStringMethod'] = 'GET';
$arguments354['addQueryStringExclude'] = '';
$arguments354['absolute'] = false;
$arguments354['parts-as'] = 'typoLinkParts';
$arguments354['parameter'] = 'https://extensions.typo3.org/help/composer-support';

$output343 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);

$output343 .= '.</p>
            ';
return $output343;
};
$arguments341 = array();
$arguments341['message'] = NULL;
$arguments341['title'] = NULL;
$arguments341['state'] = -2;
$arguments341['iconName'] = NULL;
$arguments341['disableIcon'] = false;
$arguments341['title'] = 'Invalid composer.json files in extensions';
$arguments341['state'] = -1;
$renderChildrenClosure342 = ($arguments341['message'] !== null) ? function() use ($arguments341) { return $arguments341['message']; } : $renderChildrenClosure342;
$output340 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output340 .= '
            <div class="table-fit">
                <table id="typo3-extension-list" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th data-filterable>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['key'] = NULL;
$arguments356['id'] = NULL;
$arguments356['default'] = NULL;
$arguments356['arguments'] = NULL;
$arguments356['extensionName'] = NULL;
$arguments356['languageKey'] = NULL;
$arguments356['alternativeLanguageKeys'] = NULL;
$arguments356['key'] = 'extensionList.header.extensionName';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext)]);

$output340 .= '</th>
                            <th data-filterable data-sort-default>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments358 = array();
$arguments358['key'] = NULL;
$arguments358['id'] = NULL;
$arguments358['default'] = NULL;
$arguments358['arguments'] = NULL;
$arguments358['extensionName'] = NULL;
$arguments358['languageKey'] = NULL;
$arguments358['alternativeLanguageKeys'] = NULL;
$arguments358['key'] = 'extensionList.header.extensionKey';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext)]);

$output340 .= '</th>
                            <th data-filterable>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments360 = array();
$arguments360['key'] = NULL;
$arguments360['id'] = NULL;
$arguments360['default'] = NULL;
$arguments360['arguments'] = NULL;
$arguments360['extensionName'] = NULL;
$arguments360['languageKey'] = NULL;
$arguments360['alternativeLanguageKeys'] = NULL;
$arguments360['key'] = 'extensionList.header.extensionDeficit';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext)]);

$output340 .= '</th>
                            <th data-sort-method="none">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments362 = array();
$arguments362['key'] = NULL;
$arguments362['id'] = NULL;
$arguments362['default'] = NULL;
$arguments362['arguments'] = NULL;
$arguments362['extensionName'] = NULL;
$arguments362['languageKey'] = NULL;
$arguments362['alternativeLanguageKeys'] = NULL;
$arguments362['key'] = 'extensionList.header.extensionActions';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext)]);

$output340 .= '</th>
                        </tr>
                    </thead>
                    <tbody>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
$output367 = '';

$output367 .= '
                            <tr role="row" id="';
$array368 = array (
);
$output367 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array368)]);

$output367 .= '">
                                <td>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments369 = array();
$arguments369['section'] = NULL;
$arguments369['partial'] = NULL;
$arguments369['delegate'] = NULL;
$arguments369['renderable'] = NULL;
$arguments369['arguments'] = array (
);
$arguments369['optional'] = false;
$arguments369['default'] = NULL;
$arguments369['contentAs'] = NULL;
$arguments369['debug'] = true;
$arguments369['section'] = 'Icon';
// Rendering Array
$array371 = array();
$array372 = array (
);$array371['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array372);
$arguments369['arguments'] = $array371;

$output367 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output367 .= '
                                    <a href="';
$array373 = array (
);
$output367 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array373)]);

$output367 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments374 = array();
$arguments374['key'] = NULL;
$arguments374['id'] = NULL;
$arguments374['default'] = NULL;
$arguments374['arguments'] = NULL;
$arguments374['extensionName'] = NULL;
$arguments374['languageKey'] = NULL;
$arguments374['alternativeLanguageKeys'] = NULL;
$arguments374['key'] = 'extensionList.showComposerProposal';

$output367 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext)]);

$output367 .= '" class="btn btn-link p-0">
                                        ';
$array376 = array (
);
$output367 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array376)]);

$output367 .= '
                                    </a>
                                </td>
                                <td>
                                    ';
$array377 = array (
);
$output367 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array377)]);

$output367 .= '
                                </td>
                                <td>
                                    <span class="label ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments378 = array();
$arguments378['then'] = NULL;
$arguments378['else'] = NULL;
$arguments378['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array380 = array();
$array381 = array (
);$array380['0'] = $renderingContext->getVariableProvider()->getByPath('extension.deficit', $array381);
$array380['1'] = ' == 2';

$expression382 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments378['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression382(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array380)
					),
					$renderingContext
				);
$arguments378['then'] = 'label-warning';
$arguments378['else'] = 'label-danger';

$output367 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);

$output367 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments383 = array();
$arguments383['key'] = NULL;
$arguments383['id'] = NULL;
$arguments383['default'] = NULL;
$arguments383['arguments'] = NULL;
$arguments383['extensionName'] = NULL;
$arguments383['languageKey'] = NULL;
$arguments383['alternativeLanguageKeys'] = NULL;
$output385 = '';

$output385 .= 'extensionComposerStatus.deficit.';
$array386 = array (
);
$output385 .= $renderingContext->getVariableProvider()->getByPath('extension.deficit', $array386);

$output385 .= '.short';
$arguments383['key'] = $output385;

$output367 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext)]);

$output367 .= '</span>
                                </td>
                                <td>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
$output411 = '';

$output411 .= '
                                            <a href="';
$array412 = array (
);
$output411 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array412)]);

$output411 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments413 = array();
$arguments413['key'] = NULL;
$arguments413['id'] = NULL;
$arguments413['default'] = NULL;
$arguments413['arguments'] = NULL;
$arguments413['extensionName'] = NULL;
$arguments413['languageKey'] = NULL;
$arguments413['alternativeLanguageKeys'] = NULL;
$arguments413['key'] = 'extensionList.showComposerProposal';

$output411 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext)]);

$output411 .= '" class="btn btn-default">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments415 = array();
$arguments415['identifier'] = NULL;
$arguments415['size'] = 'small';
$arguments415['overlay'] = NULL;
$arguments415['state'] = 'default';
$arguments415['alternativeMarkupIdentifier'] = NULL;
$arguments415['identifier'] = 'actions-document-synchronize';

$output411 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);

$output411 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments417 = array();
$arguments417['key'] = NULL;
$arguments417['id'] = NULL;
$arguments417['default'] = NULL;
$arguments417['arguments'] = NULL;
$arguments417['extensionName'] = NULL;
$arguments417['languageKey'] = NULL;
$arguments417['alternativeLanguageKeys'] = NULL;
$arguments417['key'] = 'extensionList.showComposerProposal';

$output411 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext)]);

$output411 .= '
                                            </a>
                                        ';
return $output411;
};
$arguments409 = array();

$output408 .= '';

$output408 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
$output421 = '';

$output421 .= '
                                            <a href="';
$array422 = array (
);
$output421 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array422)]);

$output421 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments423 = array();
$arguments423['key'] = NULL;
$arguments423['id'] = NULL;
$arguments423['default'] = NULL;
$arguments423['arguments'] = NULL;
$arguments423['extensionName'] = NULL;
$arguments423['languageKey'] = NULL;
$arguments423['alternativeLanguageKeys'] = NULL;
$arguments423['key'] = 'extensionList.fetchComposerProposal.details';

$output421 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext)]);

$output421 .= '" class="btn btn-warning">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['identifier'] = NULL;
$arguments425['size'] = 'small';
$arguments425['overlay'] = NULL;
$arguments425['state'] = 'default';
$arguments425['alternativeMarkupIdentifier'] = NULL;
$arguments425['identifier'] = 'actions-document-synchronize';

$output421 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);

$output421 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments427 = array();
$arguments427['key'] = NULL;
$arguments427['id'] = NULL;
$arguments427['default'] = NULL;
$arguments427['arguments'] = NULL;
$arguments427['extensionName'] = NULL;
$arguments427['languageKey'] = NULL;
$arguments427['alternativeLanguageKeys'] = NULL;
$arguments427['key'] = 'extensionList.fetchComposerProposal';

$output421 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext)]);

$output421 .= '
                                            </a>
                                        ';
return $output421;
};
$arguments419 = array();
$arguments419['if'] = NULL;

$output408 .= '';

$output408 .= '
                                    ';
return $output408;
};
$arguments387 = array();
$arguments387['then'] = NULL;
$arguments387['else'] = NULL;
$arguments387['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array405 = array();
$array406 = array (
);$array405['0'] = $renderingContext->getVariableProvider()->getByPath('extension.deficit', $array406);
$array405['1'] = ' == 2';

$expression407 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments387['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression407(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array405)
					),
					$renderingContext
				);
$arguments387['__thenClosure'] = function() use ($renderingContext, $self) {
$output389 = '';

$output389 .= '
                                            <a href="';
$array390 = array (
);
$output389 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array390)]);

$output389 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments391 = array();
$arguments391['key'] = NULL;
$arguments391['id'] = NULL;
$arguments391['default'] = NULL;
$arguments391['arguments'] = NULL;
$arguments391['extensionName'] = NULL;
$arguments391['languageKey'] = NULL;
$arguments391['alternativeLanguageKeys'] = NULL;
$arguments391['key'] = 'extensionList.showComposerProposal';

$output389 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext)]);

$output389 .= '" class="btn btn-default">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments393 = array();
$arguments393['identifier'] = NULL;
$arguments393['size'] = 'small';
$arguments393['overlay'] = NULL;
$arguments393['state'] = 'default';
$arguments393['alternativeMarkupIdentifier'] = NULL;
$arguments393['identifier'] = 'actions-document-synchronize';

$output389 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);

$output389 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments395 = array();
$arguments395['key'] = NULL;
$arguments395['id'] = NULL;
$arguments395['default'] = NULL;
$arguments395['arguments'] = NULL;
$arguments395['extensionName'] = NULL;
$arguments395['languageKey'] = NULL;
$arguments395['alternativeLanguageKeys'] = NULL;
$arguments395['key'] = 'extensionList.showComposerProposal';

$output389 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext)]);

$output389 .= '
                                            </a>
                                        ';
return $output389;
};
$arguments387['__elseClosures'][] = function() use ($renderingContext, $self) {
$output397 = '';

$output397 .= '
                                            <a href="';
$array398 = array (
);
$output397 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array398)]);

$output397 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments399 = array();
$arguments399['key'] = NULL;
$arguments399['id'] = NULL;
$arguments399['default'] = NULL;
$arguments399['arguments'] = NULL;
$arguments399['extensionName'] = NULL;
$arguments399['languageKey'] = NULL;
$arguments399['alternativeLanguageKeys'] = NULL;
$arguments399['key'] = 'extensionList.fetchComposerProposal.details';

$output397 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext)]);

$output397 .= '" class="btn btn-warning">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments401 = array();
$arguments401['identifier'] = NULL;
$arguments401['size'] = 'small';
$arguments401['overlay'] = NULL;
$arguments401['state'] = 'default';
$arguments401['alternativeMarkupIdentifier'] = NULL;
$arguments401['identifier'] = 'actions-document-synchronize';

$output397 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext);

$output397 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments403 = array();
$arguments403['key'] = NULL;
$arguments403['id'] = NULL;
$arguments403['default'] = NULL;
$arguments403['arguments'] = NULL;
$arguments403['extensionName'] = NULL;
$arguments403['languageKey'] = NULL;
$arguments403['alternativeLanguageKeys'] = NULL;
$arguments403['key'] = 'extensionList.fetchComposerProposal';

$output397 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext)]);

$output397 .= '
                                            </a>
                                        ';
return $output397;
};

$output367 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext);

$output367 .= '
                                </td>
                            </tr>
                        ';
return $output367;
};
$arguments364 = array();
$arguments364['each'] = NULL;
$arguments364['as'] = NULL;
$arguments364['key'] = NULL;
$arguments364['reverse'] = false;
$arguments364['iteration'] = NULL;
$array366 = array (
);$arguments364['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array366);
$arguments364['as'] = 'extension';
$arguments364['key'] = 'extensionKey';

$output340 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);

$output340 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output340;
};
$arguments338 = array();

$output337 .= '';

$output337 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
$output431 = '';

$output431 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['message'] = NULL;
$arguments432['title'] = NULL;
$arguments432['state'] = -2;
$arguments432['iconName'] = NULL;
$arguments432['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments434 = array();
$arguments434['key'] = NULL;
$arguments434['id'] = NULL;
$arguments434['default'] = NULL;
$arguments434['arguments'] = NULL;
$arguments434['extensionName'] = NULL;
$arguments434['languageKey'] = NULL;
$arguments434['alternativeLanguageKeys'] = NULL;
$arguments434['key'] = 'extensionComposerStatus.nothingToUpdate.title';
$arguments432['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments436 = array();
$arguments436['key'] = NULL;
$arguments436['id'] = NULL;
$arguments436['default'] = NULL;
$arguments436['arguments'] = NULL;
$arguments436['extensionName'] = NULL;
$arguments436['languageKey'] = NULL;
$arguments436['alternativeLanguageKeys'] = NULL;
$arguments436['key'] = 'extensionComposerStatus.nothingToUpdate.message.multiple';
$arguments432['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext)]);
$arguments432['state'] = -1;
$renderChildrenClosure433 = ($arguments432['message'] !== null) ? function() use ($arguments432) { return $arguments432['message']; } : $renderChildrenClosure433;
$output431 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output431 .= '
        ';
return $output431;
};
$arguments429 = array();
$arguments429['if'] = NULL;

$output337 .= '';

$output337 .= '
    ';
return $output337;
};
$arguments236 = array();
$arguments236['then'] = NULL;
$arguments236['else'] = NULL;
$arguments236['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array334 = array();
$array335 = array (
);$array334['0'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array335);

$expression336 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments236['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array334)
					),
					$renderingContext
				);
$arguments236['__thenClosure'] = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$output241 = '';

$output241 .= '
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['key'] = NULL;
$arguments242['id'] = NULL;
$arguments242['default'] = NULL;
$arguments242['arguments'] = NULL;
$arguments242['extensionName'] = NULL;
$arguments242['languageKey'] = NULL;
$arguments242['alternativeLanguageKeys'] = NULL;
$arguments242['key'] = 'extensionList.composerStatus.information';

$output241 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext)]);

$output241 .= '</p>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments244 = array();
$arguments244['key'] = NULL;
$arguments244['id'] = NULL;
$arguments244['default'] = NULL;
$arguments244['arguments'] = NULL;
$arguments244['extensionName'] = NULL;
$arguments244['languageKey'] = NULL;
$arguments244['alternativeLanguageKeys'] = NULL;
$arguments244['key'] = 'extensionList.composerStatus.thirdParty';

$output241 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext)]);

$output241 .= '</p>
                <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments246 = array();
$arguments246['key'] = NULL;
$arguments246['id'] = NULL;
$arguments246['default'] = NULL;
$arguments246['arguments'] = NULL;
$arguments246['extensionName'] = NULL;
$arguments246['languageKey'] = NULL;
$arguments246['alternativeLanguageKeys'] = NULL;
$arguments246['key'] = 'extensionList.composerStatus.missingManifest';

$output241 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext)]);

$output241 .= '</h4>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['key'] = NULL;
$arguments248['id'] = NULL;
$arguments248['default'] = NULL;
$arguments248['arguments'] = NULL;
$arguments248['extensionName'] = NULL;
$arguments248['languageKey'] = NULL;
$arguments248['alternativeLanguageKeys'] = NULL;
$arguments248['key'] = 'extensionList.composerStatus.terRequest';

$output241 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext)]);

$output241 .= '</p>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments250 = array();
$arguments250['key'] = NULL;
$arguments250['id'] = NULL;
$arguments250['default'] = NULL;
$arguments250['arguments'] = NULL;
$arguments250['extensionName'] = NULL;
$arguments250['languageKey'] = NULL;
$arguments250['alternativeLanguageKeys'] = NULL;
$arguments250['key'] = 'extensionList.composerStatus.additionalInformation';

$output241 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext)]);

$output241 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments252 = array();
$arguments252['parameter'] = NULL;
$arguments252['target'] = '';
$arguments252['class'] = '';
$arguments252['title'] = '';
$arguments252['language'] = NULL;
$arguments252['additionalParams'] = '';
$arguments252['additionalAttributes'] = array (
);
$arguments252['useCacheHash'] = NULL;
$arguments252['addQueryString'] = false;
$arguments252['addQueryStringMethod'] = 'GET';
$arguments252['addQueryStringExclude'] = '';
$arguments252['absolute'] = false;
$arguments252['parts-as'] = 'typoLinkParts';
$arguments252['parameter'] = 'https://extensions.typo3.org/help/composer-support';

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output241 .= '.</p>
            ';
return $output241;
};
$arguments239 = array();
$arguments239['message'] = NULL;
$arguments239['title'] = NULL;
$arguments239['state'] = -2;
$arguments239['iconName'] = NULL;
$arguments239['disableIcon'] = false;
$arguments239['title'] = 'Invalid composer.json files in extensions';
$arguments239['state'] = -1;
$renderChildrenClosure240 = ($arguments239['message'] !== null) ? function() use ($arguments239) { return $arguments239['message']; } : $renderChildrenClosure240;
$output238 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output238 .= '
            <div class="table-fit">
                <table id="typo3-extension-list" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th data-filterable>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments254 = array();
$arguments254['key'] = NULL;
$arguments254['id'] = NULL;
$arguments254['default'] = NULL;
$arguments254['arguments'] = NULL;
$arguments254['extensionName'] = NULL;
$arguments254['languageKey'] = NULL;
$arguments254['alternativeLanguageKeys'] = NULL;
$arguments254['key'] = 'extensionList.header.extensionName';

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext)]);

$output238 .= '</th>
                            <th data-filterable data-sort-default>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['key'] = NULL;
$arguments256['id'] = NULL;
$arguments256['default'] = NULL;
$arguments256['arguments'] = NULL;
$arguments256['extensionName'] = NULL;
$arguments256['languageKey'] = NULL;
$arguments256['alternativeLanguageKeys'] = NULL;
$arguments256['key'] = 'extensionList.header.extensionKey';

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext)]);

$output238 .= '</th>
                            <th data-filterable>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['key'] = NULL;
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['extensionName'] = NULL;
$arguments258['languageKey'] = NULL;
$arguments258['alternativeLanguageKeys'] = NULL;
$arguments258['key'] = 'extensionList.header.extensionDeficit';

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext)]);

$output238 .= '</th>
                            <th data-sort-method="none">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['key'] = NULL;
$arguments260['id'] = NULL;
$arguments260['default'] = NULL;
$arguments260['arguments'] = NULL;
$arguments260['extensionName'] = NULL;
$arguments260['languageKey'] = NULL;
$arguments260['alternativeLanguageKeys'] = NULL;
$arguments260['key'] = 'extensionList.header.extensionActions';

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext)]);

$output238 .= '</th>
                        </tr>
                    </thead>
                    <tbody>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
                            <tr role="row" id="';
$array266 = array (
);
$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array266)]);

$output265 .= '">
                                <td>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['section'] = NULL;
$arguments267['partial'] = NULL;
$arguments267['delegate'] = NULL;
$arguments267['renderable'] = NULL;
$arguments267['arguments'] = array (
);
$arguments267['optional'] = false;
$arguments267['default'] = NULL;
$arguments267['contentAs'] = NULL;
$arguments267['debug'] = true;
$arguments267['section'] = 'Icon';
// Rendering Array
$array269 = array();
$array270 = array (
);$array269['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array270);
$arguments267['arguments'] = $array269;

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output265 .= '
                                    <a href="';
$array271 = array (
);
$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array271)]);

$output265 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['key'] = NULL;
$arguments272['id'] = NULL;
$arguments272['default'] = NULL;
$arguments272['arguments'] = NULL;
$arguments272['extensionName'] = NULL;
$arguments272['languageKey'] = NULL;
$arguments272['alternativeLanguageKeys'] = NULL;
$arguments272['key'] = 'extensionList.showComposerProposal';

$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext)]);

$output265 .= '" class="btn btn-link p-0">
                                        ';
$array274 = array (
);
$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array274)]);

$output265 .= '
                                    </a>
                                </td>
                                <td>
                                    ';
$array275 = array (
);
$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array275)]);

$output265 .= '
                                </td>
                                <td>
                                    <span class="label ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['then'] = NULL;
$arguments276['else'] = NULL;
$arguments276['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array278 = array();
$array279 = array (
);$array278['0'] = $renderingContext->getVariableProvider()->getByPath('extension.deficit', $array279);
$array278['1'] = ' == 2';

$expression280 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments276['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression280(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array278)
					),
					$renderingContext
				);
$arguments276['then'] = 'label-warning';
$arguments276['else'] = 'label-danger';

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output265 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['key'] = NULL;
$arguments281['id'] = NULL;
$arguments281['default'] = NULL;
$arguments281['arguments'] = NULL;
$arguments281['extensionName'] = NULL;
$arguments281['languageKey'] = NULL;
$arguments281['alternativeLanguageKeys'] = NULL;
$output283 = '';

$output283 .= 'extensionComposerStatus.deficit.';
$array284 = array (
);
$output283 .= $renderingContext->getVariableProvider()->getByPath('extension.deficit', $array284);

$output283 .= '.short';
$arguments281['key'] = $output283;

$output265 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext)]);

$output265 .= '</span>
                                </td>
                                <td>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$output306 = '';

$output306 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
                                            <a href="';
$array310 = array (
);
$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array310)]);

$output309 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments311 = array();
$arguments311['key'] = NULL;
$arguments311['id'] = NULL;
$arguments311['default'] = NULL;
$arguments311['arguments'] = NULL;
$arguments311['extensionName'] = NULL;
$arguments311['languageKey'] = NULL;
$arguments311['alternativeLanguageKeys'] = NULL;
$arguments311['key'] = 'extensionList.showComposerProposal';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext)]);

$output309 .= '" class="btn btn-default">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['identifier'] = NULL;
$arguments313['size'] = 'small';
$arguments313['overlay'] = NULL;
$arguments313['state'] = 'default';
$arguments313['alternativeMarkupIdentifier'] = NULL;
$arguments313['identifier'] = 'actions-document-synchronize';

$output309 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output309 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments315 = array();
$arguments315['key'] = NULL;
$arguments315['id'] = NULL;
$arguments315['default'] = NULL;
$arguments315['arguments'] = NULL;
$arguments315['extensionName'] = NULL;
$arguments315['languageKey'] = NULL;
$arguments315['alternativeLanguageKeys'] = NULL;
$arguments315['key'] = 'extensionList.showComposerProposal';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext)]);

$output309 .= '
                                            </a>
                                        ';
return $output309;
};
$arguments307 = array();

$output306 .= '';

$output306 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
$output319 = '';

$output319 .= '
                                            <a href="';
$array320 = array (
);
$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array320)]);

$output319 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$arguments321['key'] = NULL;
$arguments321['id'] = NULL;
$arguments321['default'] = NULL;
$arguments321['arguments'] = NULL;
$arguments321['extensionName'] = NULL;
$arguments321['languageKey'] = NULL;
$arguments321['alternativeLanguageKeys'] = NULL;
$arguments321['key'] = 'extensionList.fetchComposerProposal.details';

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext)]);

$output319 .= '" class="btn btn-warning">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['identifier'] = NULL;
$arguments323['size'] = 'small';
$arguments323['overlay'] = NULL;
$arguments323['state'] = 'default';
$arguments323['alternativeMarkupIdentifier'] = NULL;
$arguments323['identifier'] = 'actions-document-synchronize';

$output319 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output319 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['key'] = NULL;
$arguments325['id'] = NULL;
$arguments325['default'] = NULL;
$arguments325['arguments'] = NULL;
$arguments325['extensionName'] = NULL;
$arguments325['languageKey'] = NULL;
$arguments325['alternativeLanguageKeys'] = NULL;
$arguments325['key'] = 'extensionList.fetchComposerProposal';

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext)]);

$output319 .= '
                                            </a>
                                        ';
return $output319;
};
$arguments317 = array();
$arguments317['if'] = NULL;

$output306 .= '';

$output306 .= '
                                    ';
return $output306;
};
$arguments285 = array();
$arguments285['then'] = NULL;
$arguments285['else'] = NULL;
$arguments285['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array303 = array();
$array304 = array (
);$array303['0'] = $renderingContext->getVariableProvider()->getByPath('extension.deficit', $array304);
$array303['1'] = ' == 2';

$expression305 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments285['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression305(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array303)
					),
					$renderingContext
				);
$arguments285['__thenClosure'] = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
                                            <a href="';
$array288 = array (
);
$output287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array288)]);

$output287 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments289 = array();
$arguments289['key'] = NULL;
$arguments289['id'] = NULL;
$arguments289['default'] = NULL;
$arguments289['arguments'] = NULL;
$arguments289['extensionName'] = NULL;
$arguments289['languageKey'] = NULL;
$arguments289['alternativeLanguageKeys'] = NULL;
$arguments289['key'] = 'extensionList.showComposerProposal';

$output287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext)]);

$output287 .= '" class="btn btn-default">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments291 = array();
$arguments291['identifier'] = NULL;
$arguments291['size'] = 'small';
$arguments291['overlay'] = NULL;
$arguments291['state'] = 'default';
$arguments291['alternativeMarkupIdentifier'] = NULL;
$arguments291['identifier'] = 'actions-document-synchronize';

$output287 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output287 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['key'] = NULL;
$arguments293['id'] = NULL;
$arguments293['default'] = NULL;
$arguments293['arguments'] = NULL;
$arguments293['extensionName'] = NULL;
$arguments293['languageKey'] = NULL;
$arguments293['alternativeLanguageKeys'] = NULL;
$arguments293['key'] = 'extensionList.showComposerProposal';

$output287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext)]);

$output287 .= '
                                            </a>
                                        ';
return $output287;
};
$arguments285['__elseClosures'][] = function() use ($renderingContext, $self) {
$output295 = '';

$output295 .= '
                                            <a href="';
$array296 = array (
);
$output295 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.detailLink', $array296)]);

$output295 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['key'] = NULL;
$arguments297['id'] = NULL;
$arguments297['default'] = NULL;
$arguments297['arguments'] = NULL;
$arguments297['extensionName'] = NULL;
$arguments297['languageKey'] = NULL;
$arguments297['alternativeLanguageKeys'] = NULL;
$arguments297['key'] = 'extensionList.fetchComposerProposal.details';

$output295 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext)]);

$output295 .= '" class="btn btn-warning">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['identifier'] = NULL;
$arguments299['size'] = 'small';
$arguments299['overlay'] = NULL;
$arguments299['state'] = 'default';
$arguments299['alternativeMarkupIdentifier'] = NULL;
$arguments299['identifier'] = 'actions-document-synchronize';

$output295 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output295 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['key'] = NULL;
$arguments301['id'] = NULL;
$arguments301['default'] = NULL;
$arguments301['arguments'] = NULL;
$arguments301['extensionName'] = NULL;
$arguments301['languageKey'] = NULL;
$arguments301['alternativeLanguageKeys'] = NULL;
$arguments301['key'] = 'extensionList.fetchComposerProposal';

$output295 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext)]);

$output295 .= '
                                            </a>
                                        ';
return $output295;
};

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output265 .= '
                                </td>
                            </tr>
                        ';
return $output265;
};
$arguments262 = array();
$arguments262['each'] = NULL;
$arguments262['as'] = NULL;
$arguments262['key'] = NULL;
$arguments262['reverse'] = false;
$arguments262['iteration'] = NULL;
$array264 = array (
);$arguments262['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array264);
$arguments262['as'] = 'extension';
$arguments262['key'] = 'extensionKey';

$output238 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output238 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output238;
};
$arguments236['__elseClosures'][] = function() use ($renderingContext, $self) {
$output327 = '';

$output327 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments328 = array();
$arguments328['message'] = NULL;
$arguments328['title'] = NULL;
$arguments328['state'] = -2;
$arguments328['iconName'] = NULL;
$arguments328['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments330 = array();
$arguments330['key'] = NULL;
$arguments330['id'] = NULL;
$arguments330['default'] = NULL;
$arguments330['arguments'] = NULL;
$arguments330['extensionName'] = NULL;
$arguments330['languageKey'] = NULL;
$arguments330['alternativeLanguageKeys'] = NULL;
$arguments330['key'] = 'extensionComposerStatus.nothingToUpdate.title';
$arguments328['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['key'] = NULL;
$arguments332['id'] = NULL;
$arguments332['default'] = NULL;
$arguments332['arguments'] = NULL;
$arguments332['extensionName'] = NULL;
$arguments332['languageKey'] = NULL;
$arguments332['alternativeLanguageKeys'] = NULL;
$arguments332['key'] = 'extensionComposerStatus.nothingToUpdate.message.multiple';
$arguments328['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext)]);
$arguments328['state'] = -1;
$renderChildrenClosure329 = ($arguments328['message'] !== null) ? function() use ($arguments328) { return $arguments328['message']; } : $renderChildrenClosure329;
$output327 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output327 .= '
        ';
return $output327;
};

$output233 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output233 .= '
';
return $output233;
};
$arguments231 = array();
$arguments231['name'] = NULL;
$arguments231['name'] = 'content';

$output228 .= NULL;

$output228 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
$output440 = '';

$output440 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
$output452 = '';

$output452 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
            <img class="extension-icon" src="';
$array456 = array (
);
$output455 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.icon', $array456)]);

$output455 .= '" alt="';
$array457 = array (
);
$output455 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array457)]);

$output455 .= '" />
        ';
return $output455;
};
$arguments453 = array();

$output452 .= '';

$output452 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
$output460 = '';

$output460 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments461 = array();
$arguments461['identifier'] = NULL;
$arguments461['size'] = 'small';
$arguments461['overlay'] = NULL;
$arguments461['state'] = 'default';
$arguments461['alternativeMarkupIdentifier'] = NULL;
$arguments461['identifier'] = 'empty-empty';

$output460 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext);

$output460 .= '
        ';
return $output460;
};
$arguments458 = array();
$arguments458['if'] = NULL;

$output452 .= '';

$output452 .= '
    ';
return $output452;
};
$arguments441 = array();
$arguments441['then'] = NULL;
$arguments441['else'] = NULL;
$arguments441['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array449 = array();
$array450 = array (
);$array449['0'] = $renderingContext->getVariableProvider()->getByPath('extension.icon', $array450);

$expression451 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments441['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression451(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array449)
					),
					$renderingContext
				);
$arguments441['__thenClosure'] = function() use ($renderingContext, $self) {
$output443 = '';

$output443 .= '
            <img class="extension-icon" src="';
$array444 = array (
);
$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.icon', $array444)]);

$output443 .= '" alt="';
$array445 = array (
);
$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array445)]);

$output443 .= '" />
        ';
return $output443;
};
$arguments441['__elseClosures'][] = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments447 = array();
$arguments447['identifier'] = NULL;
$arguments447['size'] = 'small';
$arguments447['overlay'] = NULL;
$arguments447['state'] = 'default';
$arguments447['alternativeMarkupIdentifier'] = NULL;
$arguments447['identifier'] = 'empty-empty';

$output446 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output446 .= '
        ';
return $output446;
};

$output440 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext);

$output440 .= '
';
return $output440;
};
$arguments438 = array();
$arguments438['name'] = NULL;
$arguments438['name'] = 'Icon';

$output228 .= NULL;

$output228 .= '
';

return $output228;
}


}
#