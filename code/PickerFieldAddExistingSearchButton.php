<?php

class PickerFieldAddExistingSearchButton extends GridFieldAddExistingSearchButton {
	protected $searchFilters	= null;
	protected $searchExcludes	= null;
	protected $searchList		= null;
	protected $renderTemplate	= 'GridFieldAddExistingSearchHandler';
  /**
 * Set a custom template to render with (sends to PickerFieldAddExistingSearchHandler)
 * @param String
 */
  public function setRenderTemplate($template) {
    $this->renderTemplate = $template;
  }
  public function getRenderTemplate() {
    return $this->renderTemplate;
  }
	public function handleSearch($grid, $request) {
		$pickerField = new PickerFieldAddExistingSearchHandler($grid, $this);
		$pickerField->setRenderTemplate($this->getRenderTemplate());
		return $pickerField;

	}

	// public function handleSearch($grid, $request) {
	// 	return new PickerFieldAddExistingSearchHandler($grid, $this);
	// }

	public function setSearchFilters($filters) {
		$this->searchFilters = $filters;
	}

	public function setSearchExcludes($excludes) {
		$this->searchExcludes = $excludes;
	}

	/**
	 * Set a custom list to be searched on
	 * @param SS_List $list
	 */
	public function setSearchList(SS_List $list) {
		$this->searchList = $list;
	}

	public function getSearchFilters() {
		return $this->searchFilters;
	}

	public function getSearchExcludes() {
		return $this->searchExcludes;
	}

	public function getSearchList() {
		return $this->searchList;
	}

}
