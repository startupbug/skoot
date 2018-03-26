
<?php include('../header.php'); ?>
<!--<main id="main-block"
   gt-scroll-on="facetedSearch.pagination:changed"
   gt-scroll-speed="50"
   >
   <div class="page-header">
      <div class="container">
         <div class="row">
            <div class="col-sm-24">
               <h1>
                  Jobs for Fresh Graduates
               </h1>
               <form class="form-inline space-bottom-xs hidden-print"
                  action="https://www.gulftalent.com/jobs/search"
                  gt-submit
                  ng-controller="jobSearchWidgetController"
                  ng-cloak>
                  <div class="form-group
                     form-group-xl
                     ">
                     <input type="text"
                        autocomplete="off"
                        placeholder="Enter keywords (e.g. Finance Manager, Architect )"
                        name="pos_ref"
                        ng-model="keyword"
                        typeahead="jobList for jobList in jobTitleList | gtExactTypeaheadMatch:$viewValue | limitTo:typeaheadLimit"
                        class="form-control input-lg input-blk" />
                  </div>
                  <input type="hidden" name="frmPositionCountry" value="" />
                  <button type="submit" class="btn btn-lg btn-primary btn-corner">
                  Search
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="page-content">
      
    
      <div class="container hidden-print"
         id="cv-search-dynamic-filter-band">
         <div class="row">
            <div class="col-sm-24">
               <div class="panel panel-label-strip">
                  <h3 class="header-ribbon"
                    >
                     Filtered by
                  </h3>
                  <span>
                  <span class="label label-default space-top-xs">
                  {{ group.label }}
                  </span>
                  </span>
                  <span class="text-sm text-muted space-top-xs">
                  Use filters on the left to narrow your search results
                  </span>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-sm-6 ">
               <div class="panel panel-default" ng-controller="facetedSearchFilterController">
                  <div class="panel-heading">
                     <h4>Filter Results
                        <div class="pull-right">
                           <a ng-click="clearAll()" class="text-body text-base">Clear all</a>
                        </div>
                     </h4>
                  </div>
                  <form role="form" action="https://www.gulftalent.com/jobs/search">
                     <div  class="filter-group">
                        <div></div>
                     </div>
                     <input type="hidden" name="pos_ref" value=""/>
                  </form>
               </div>
               <script type="text/ng-template" id="basic">
                  <h5 
                          class="filter-group-toggle filter-group-heading text-regular"
                         >
                      <i
                              class="fa fa-fw text-section">
                      </i>
                      <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                  </h5>
                  <ul collapse="group.collapsed" 
                                          class="filter-group-list speedy"
                          >
                      <li class="filter-group-list-item">
                          <div class="checkbox" ng-show="group.items.length >= 2">
                              <label>
                                  <input type="checkbox" ng-model="group.allFilter.selected"
                                          />All
                              </label>
                          </div>
                      </li>
                      <li 
                              
                              class="filter-group-list-item">
                          <div class="checkbox">
                              <label 
                                      >
                                  <input type="checkbox"
                                                                         
                                          
                                        
                                        />
                                      
                                  <i class="fa fa-fw fa-question-circle text-med text-secondary pull-right"
                                          popover="{{ item.helpText }}"
                                          popover-append-to-body="true"
                                        >
                                  </i>
                              </label>
                                                  <div class="pull-right">({{ item.count }})</div>
                              
                          </div>
                      </li>
                      <li>
                          <div  
                                  
                                  class="filter-group-toggle filter-group-expand">
                              <i class="fa fa-fw fa-plus-square text-section"></i><span class="text-sm text-muted">Show all</span>
                          </div>
                          <div class="filter-group-toggle filter-group-expand">
                              <i class="fa fa-fw fa-minus-square text-section"></i><span class="text-sm text-muted">Show less</span>
                          </div>
                      </li>
                  </ul>
               </script>
               <script type="text/ng-template" id="option">
                  <div >
                      <h5 
                              class="filter-group-toggle filter-group-heading text-regular"
                             >
                          <i
                                  class="fa fa-fw text-section">
                          </i>
                          <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                      </h5>
                      <ul collapse="group.collapsed" class="form-horizontal filter-group-list">
                          <li class="form-group filter-group-list-item">
                              <div class="select">
                                  <div class="col-sm-13">
                                      <select class="form-control">
                                             
                                             
                                      </select>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
               </script>
               <script type="text/ng-template" id="elementary">
                  <h5 
                          class="filter-group-toggle filter-group-heading text-regular">
                          
                      <i>
                      </i>
                      <i class="fa fa-lock pull-right text-muted"></i>
                  </h5>
                  <ul collapse="group.collapsed" 
                                          class="filter-group-list speedy"
                          >
                      <li class="filter-group-list-item">
                          <div class="checkbox" ng-show="group.items.length >= 2">
                              <label>
                                  <input type="checkbox" ng-model="group.allFilter.selected"
                                         
                              </label>
                          </div>
                      </li>
                      <li
                              
                              class="filter-group-list-item">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" ng-model="item.selected">
                                      {{ item.label.short }}
                                  <i class="fa fa-fw fa-question-circle text-med text-secondary pull-right"
                                          popover="{{ item.helpText }}"
                                          popover-append-to-body="true"
                                          ng-show="item.helpText">
                                  </i>
                              </label>
                              
                          </div>
                      </li>
                      <li>
                          <div ng-click="group.overrideCustomFilter = true; group.overrideLimit = 'all'" 
                                  ng-show="group.itemsFiltered.length < group.items.length"
                                  class="filter-group-toggle filter-group-expand">
                              <i class="fa fa-fw fa-plus-square text-section"></i><span class="text-sm text-muted">Show all</span>
                          </div>
                          <div ng-click="group.overrideCustomFilter = true; group.overrideLimit = filterGroupDefaultLimit" 
                                  ng-show="group.itemsFiltered.length >= group.items.length &amp;&amp; group.itemsFiltered.length > filterGroupDefaultLimit + filterLimitMargin" 
                                  class="filter-group-toggle filter-group-expand">
                              <i class="fa fa-fw fa-minus-square text-section"></i><span class="text-sm text-muted">Show less</span>
                          </div>
                      </li>
                  </ul>
               </script>
               <script type="text/ng-template" id="radio">
                  <h5 ng-click="groupToggle(group)"
                          class="filter-group-toggle filter-group-heading text-regular">
                      <i ng-class="{'fa-caret-down': !group.collapsed, 'fa-caret-right': group.collapsed}"
                              class="fa fa-fw text-section">
                      </i>By {{ group.label}}
                      <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                  </h5>
                  <ul collapse="group.collapsed" class="filter-group-list speedy">
                      <li ng-class="{ selected: group.allFilter.selected }" class="filter-group-list-item">
                          <div class="radio">
                              <label>
                                  <input type="radio"
                                          ng-model="group.allFilter.selected"
                                          value="1"
                                          ng-change="toggleAllFilter(group)" />All
                              </label>
                          </div>
                      </li>
                      <li ng-repeat="item in group.itemsFiltered = (group.items | orderBy: ['+order'] | gtLimitToLastSelected:filterGroupDefaultLimit:group.overrideCustomFilter:group.overrideLimit:filterLimitMargin)"
                              ng-class="{ disabled: (item.count == 0) }"
                              class="filter-group-list-item">
                          <div class="radio">
                              <label ng-class="{'selected':item.selected }"
                                      title="{{ item.label.long }}">
                                  <input type="radio"
                                          name="filters[{{ group.id }}]"
                                          value="1"
                                          ng-model="item.selected" ng-change="change(group, item)" />
                                      {{ item.label.short }}
                              </label>
                          </div>
                      </li>
                      <li>
                          <div ng-click="group.overrideCustomFilter = true; group.overrideLimit = 'all'"
                                  ng-show="group.itemsFiltered.length < group.items.length"
                                  class="filter-group-toggle filter-group-expand">
                              <i class="fa fa-fw fa-plus-square text-section"></i><span class="text-sm text-muted">Show all</span>
                          </div>
                          <div ng-click="group.overrideCustomFilter = true; group.overrideLimit = filterGroupDefaultLimit"
                                  ng-show="group.itemsFiltered.length >= group.items.length &amp;&amp; group.itemsFiltered.length > filterGroupDefaultLimit + filterLimitMargin"
                                  class="filter-group-toggle filter-group-expand">
                              <i class="fa fa-fw fa-minus-square text-section"></i><span class="text-sm text-muted">Show less</span>
                          </div>
                      </li>
                  </ul>
               </script>
               <script type="text/ng-template" id="typeahead">
                  <div ng-controller="facetedSearchTypeaheadFilterController">
                      <h5 ng-click="groupToggle(group)"
                              class="filter-group-toggle filter-group-heading text-regular"
                              ng-hide="group.headless">
                          <i ng-class="{'fa-caret-down': !group.collapsed, 'fa-caret-right': group.collapsed}"
                                  class="fa fa-fw text-section">
                          </i>By {{ group.label}}
                          <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                      </h5>
                      <h5 ng-show="group.subheading" class="text-muted">{{ group.subheading }}</h5>
                      <ul collapse="group.collapsed" 
                                                  class="filter-group-list speedy"
                              
                              ng-init="filterItems(group)">
                          <li ng-class="{ selected: group.allFilter.selected }" class="filter-group-list-item">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" ng-model="group.allFilter.selected"
                                             ng-change="toggleAllFilter(group)" />
                                          {{ group.labelForAll || 'All' }}
                                  </label>
                              </div>
                          </li>
                          <li ng-repeat="item in filteredItems[group.id]" class="filter-group-list-item">
                              <div class="checkbox">
                                  <label ng-class="{'selected': item.selected }"
                                          title="{{ item.label.long }}">
                                      <input type="checkbox" ng-model="item.selected"
                                              name="filters[{{ group.id }}][{{ item.id }}]"
                                              ng-model="item.selected" ng-change="change(group, item)" />
                                          {{ item.label.short }}
                                      <i class="fa fa-fw fa-question-circle text-med text-secondary pull-right"
                                              popover="{{ item.helpText }}"
                                              popover-append-to-body="true"
                                              ng-show="item.helpText">
                                      </i>
                                  </label>
                              </div>
                          </li>
                          <li class="space-top-sm" ng-show="(group.items | trimCollection:filteredItems[group.id]).length">
                              <input type="text"
                                      autocomplete="off"
                                      placeholder="{{ 'Add ' + group.label }}"
                                      name="pos_ref"
                                      ng-model="selectedItem"
                                      typeahead-min-length="0"
                                      typeahead-on-click="true"
                                      typeahead-class="dropdown-scrollable text-sm"
                                      typeahead="item as item.label.short for item in group.items | orderBy: '+label.short' | filter:{label.short:$viewValue} | trimCollection:filteredItems[group.id]"
                                      typeahead-on-select="updateFilteredItems(group, selectedItem)"
                                      class="form-control input-sm" />
                          </li>
                      </ul>
                  </div>
               </script>
               <script type="text/ng-template" id="mutableTypeahead">
                  <div ng-controller="facetedSearchTypeaheadFilterController">
                      <h5 ng-click="groupToggle(group)"
                              class="filter-group-toggle filter-group-heading text-regular"
                              ng-hide="group.headless">
                          <i ng-class="{'fa-caret-down': !group.collapsed, 'fa-caret-right': group.collapsed}"
                                  class="fa fa-fw text-section">
                          </i>By {{ group.label}}
                          <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                      </h5>
                      <h5 ng-show="group.subheading" class="text-muted">{{ group.subheading }}</h5>
                      <ul collapse="group.collapsed" 
                                                  class="filter-group-list speedy"
                              
                              ng-init="filterItems(group)">
                          <li ng-class="{ selected: group.allFilter.selected }" class="filter-group-list-item">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" ng-model="group.allFilter.selected"
                                             ng-change="toggleAllFilter(group)" />
                                          {{ group.labelForAll || 'All' }}
                                  </label>
                              </div>
                          </li>
                          <li ng-repeat="item in filteredItems[group.id]" class="filter-group-list-item">
                              <div class="checkbox">
                                  <label ng-class="{'selected': item.selected }"
                                          title="{{ item.label.long }}">
                                      <input type="checkbox"
                                              ng-model="item.selected"
                                              name="filters[{{ group.id }}][{{ item.id }}]"
                                              ng-model="item.selected"
                                              ng-change="change(group, item)" />
                                          {{ item.label.short }}
                                      <i class="fa fa-fw fa-question-circle text-med text-secondary pull-right"
                                              popover="{{ item.helpText }}"
                                              popover-append-to-body="true"
                                              ng-show="item.helpText">
                                      </i>
                                  </label>
                              </div>
                          </li>
                          <li class="space-top-sm"
                                  ng-show="group.items.length <= 20">
                              <div ng-click="group.overrideCustomFilter = true; group.overrideLimit = 'all'; filterItems(group)" 
                                      ng-show="filteredItems[group.id].length < group.items.length"
                                      class="filter-group-toggle filter-group-expand">
                                  <i class="fa fa-fw fa-plus-square text-section"></i><span class="text-sm text-muted">Show all</span>
                              </div>
                              <div ng-click="group.overrideCustomFilter = true; group.overrideLimit = filterGroupDefaultLimit; filterItems(group)" 
                                      ng-show="filteredItems[group.id].length >= group.items.length" 
                                      class="filter-group-toggle filter-group-expand">
                                  <i class="fa fa-fw fa-minus-square text-section"></i><span class="text-sm text-muted">Show less</span>
                              </div>
                          </li>
                          <li class="space-top-sm"
                                  ng-show="(group.items | trimCollection:filteredItems[group.id]).length &&
                                      group.items.length > 20">
                              <input type="text"
                                      autocomplete="off"
                                      placeholder="{{ 'Add ' + group.label }}"
                                      name="pos_ref"
                                      ng-model="selectedItem"
                                      typeahead-min-length="0"
                                      typeahead-on-click="true"
                                      typeahead-class="dropdown-scrollable text-sm"
                                      typeahead="item as item.label.short for item in group.items | orderBy: '+label.short' | filter:{label.short:$viewValue} | trimCollection:filteredItems[group.id]"
                                      typeahead-on-select="updateFilteredItems(group, selectedItem)"
                                      class="form-control input-sm" />
                          </li>
                      </ul>
                  </div>
               </script>
               <script type="text/ng-template" id="range">
                  <div ng-controller="facetedSearchRangeFilterController">
                      <h5 ng-click="groupToggle(group)" class="filter-group-toggle filter-group-heading text-regular"
                              ng-hide="group.headless">
                          <i ng-class="{'fa-caret-down': !group.collapsed, 'fa-caret-right': group.collapsed}"
                                  class="fa fa-fw text-section">
                          </i>By {{ group.label }}
                          <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                      </h5>
                      <ul collapse="group.collapsed" class="form-horizontal filter-group-list">
                          <li class="form-group filter-group-list-item">
                              <div class="select">
                                  <label title="Min {{ group.label }}" class="control-label col-sm-6">Min.</label>
                                  <div class="col-sm-18">
                                      <select class="form-control"
                                              ng-options="minItem.id as minItem.id for minItem in group.items"
                                              name="filters[{{ group.id }}][]"
                                              ng-model="minValue"
                                              ng-change="change(group, minValue, 'min')">
                                          <option value="" ng-model="group.allFilter.selected">Any</option>
                                      </select>
                                  </div>
                              </div>
                          </li>
                          <li class="form-group filter-group-list-item">
                              <div class="select">
                                  <label title="Max {{ group.label }}" class="control-label col-sm-6">Max.</label>
                                  <div class="col-sm-18">
                                      <select class="form-control"
                                              ng-options="maxItem.id as maxItem.id for maxItem in group.items"
                                              name="filters[{{ group.id }}][]"
                                              ng-model="maxValue"
                                              gt-type-greater-than="minValue"
                                              ng-change="change(group, maxValue, 'max')">
                                          <option value="" ng-model="group.allFilter.selected">Any</option>
                                      </select>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
               </script>
               <script type="text/ng-template" id="freeRange">
                  <div ng-controller="facetedSearchFreeRangeFilterController">
                      <h5 ng-click="groupToggle(group)" class="filter-group-toggle filter-group-heading text-regular"
                              ng-hide="group.headless">
                          <i ng-class="{'fa-caret-down': !group.collapsed, 'fa-caret-right': group.collapsed}"
                                  class="fa fa-fw text-section">
                          </i>By {{ group.label }}
                          <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                      </h5>
                  
                      <div class="row form-horizontal filter-group-list" collapse="group.collapsed">
                          <div class="col-xs-11 text-center">
                              <div class="form-group">
                                  <label title="Min {{ group.label }}" class="control-label col-sm-6 text-muted">Min.</label>
                                  <input type="text"
                                          class="form-control"
                                          name="filters[{{ group.id }}][]"
                                          ng-model="minValue"
                                          placeholder="Any"
                                          ng-change="change(group, minValue, 'min')" >
                              </div>
                          </div>
                          <div class="col-xs-2 text-center col-middle space-top-xl">-</div>
                          <div class="col-xs-11 text-center">
                              <div class="form-group">
                                  <label title="Max {{ group.label }}" class="control-label col-sm-6 text-muted">Max.</label>
                                  <input type="text"
                                          class="form-control"
                                          name="filters[{{ group.id }}][]"
                                          placeholder="Any"
                                          ng-model="maxValue"
                                          ng-change="change(group, maxValue, 'max')" >
                              </div>
                          </div>
                      </div>
                      
                  </div>
                  
               </script>
               <script type="text/ng-template" id="composite">
                  <div ng-controller="facetedSearchCompositeFilterController">
                      <h5 ng-click="groupToggle(group)"
                              class="filter-group-toggle filter-group-heading text-regular"
                              ng-hide="group.headless">
                          <i ng-class="{'fa-caret-down': !group.collapsed, 'fa-caret-right': group.collapsed}"
                                  class="fa fa-fw text-section">
                          </i>By {{ group.label }}
                          <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                      </h5>
                      <div collapse="group.collapsed">
                          <div ng-repeat="(groupId, group) in group.items | orderBy: ['+order']"
                                  ng-hide="group.hidden"
                                  ng-class="{
                                      'filter-group': $parent.group.seperable && !$last,
                                      'filter-group-composite': !$parent.group.seperable
                                  }">
                              <div ng-include="group.filterType"></div>
                          </div>
                      </div>
                  </div>
                  
                  
                  <script type="text/ng-template" id="basic">
                  
                  <h5 ng-click="groupToggle(group)"
                          class="filter-group-toggle filter-group-heading text-regular"
                          ng-hide="group.headless">
                      <i ng-class="{'fa-caret-down': !group.collapsed, 'fa-caret-right': group.collapsed}"
                              class="fa fa-fw text-section">
                      </i>By {{ group.label}}
                      <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                  </h5>
                  <ul collapse="group.collapsed" 
                                          class="filter-group-list speedy"
                          >
                      <li ng-class="{ selected: group.allFilter.selected }" class="filter-group-list-item">
                          <div class="checkbox" ng-show="group.items.length >= 2">
                              <label>
                                  <input type="checkbox" ng-model="group.allFilter.selected"
                                         ng-change="toggleAllFilter(group)" />All
                              </label>
                          </div>
                      </li>
                      <li ng-repeat="item in group.itemsFiltered = (group.items | orderBy: ['+order', '-count', '-priorityorder', '+label.short'] | gtLimitToLastSelected:filterGroupDefaultLimit:group.overrideCustomFilter:group.overrideLimit:filterLimitMargin)"
                                                  ng-class="{ disabled: (item.count == 0) }"
                              
                              class="filter-group-list-item">
                          <div class="checkbox">
                              <label ng-class="{'selected': item.selected }"
                                      title="{{ item.label.long }}">
                                  <input type="checkbox" ng-model="item.selected"
                                                                          ng-disabled="item.count == 0 &amp;&amp; !item.selected"
                                          
                                          name="filters[{{ group.id }}][{{ item.id }}]"
                                          ng-model="item.selected" ng-change="change(group, item)" />
                                      {{ item.label.short }}
                                  <i class="fa fa-fw fa-question-circle text-med text-secondary pull-right"
                                          popover="{{ item.helpText }}"
                                          popover-append-to-body="true"
                                          ng-show="item.helpText">
                                  </i>
                              </label>
                                                  <div class="pull-right">({{ item.count }})</div>
                              
                          </div>
                      </li>
                      <li>
                          <div ng-click="group.overrideCustomFilter = true; group.overrideLimit = 'all'" 
                                  ng-show="group.itemsFiltered.length < group.items.length"
                                  class="filter-group-toggle filter-group-expand">
                              <i class="fa fa-fw fa-plus-square text-section"></i><span class="text-sm text-muted">Show all</span>
                          </div>
                          <div ng-click="group.overrideCustomFilter = true; group.overrideLimit = filterGroupDefaultLimit" 
                                  ng-show="group.itemsFiltered.length >= group.items.length &amp;&amp; group.itemsFiltered.length > filterGroupDefaultLimit + filterLimitMargin" 
                                  class="filter-group-toggle filter-group-expand">
                              <i class="fa fa-fw fa-minus-square text-section"></i><span class="text-sm text-muted">Show less</span>
                          </div>
                      </li>
                  </ul>
               </script>
               <script type="text/ng-template" id="option">
                  <div ng-controller="facetedSearchOptionFilterController">
                      <h5 ng-click="groupToggle(group)"
                              class="filter-group-toggle filter-group-heading text-regular"
                              ng-hide="group.headless">
                          <i ng-class="{'fa-caret-down': !group.collapsed, 'fa-caret-right': group.collapsed}"
                                  class="fa fa-fw text-section">
                          </i>By {{ group.label }}
                          <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                      </h5>
                      <ul collapse="group.collapsed" class="form-horizontal filter-group-list">
                          <li class="form-group filter-group-list-item">
                              <div class="select">
                                  <div class="col-sm-13">
                                      <select class="form-control"
                                              ng-options="item.id for item in group.items"
                                              name="filters[{{ group.id }}][]"
                                              ng-model="selectedValue"
                                              ng-change="change(group, selectedValue)">
                                      </select>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
               </script>
               <script type="text/ng-template" id="elementary">
                  <h5 ng-click="groupToggle(group)"
                          class="filter-group-toggle filter-group-heading text-regular"
                          ng-hide="group.headless">
                      <i ng-class="{'fa-caret-down': !group.collapsed, 'fa-caret-right': group.collapsed}"
                              class="fa fa-fw text-section">
                      </i>By {{ group.label}}
                      <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                  </h5>
                  <ul collapse="group.collapsed" 
                                          class="filter-group-list speedy"
                          >
                      <li ng-class="{ selected: group.allFilter.selected }" class="filter-group-list-item">
                          <div class="checkbox" ng-show="group.items.length >= 2">
                              <label>
                                  <input type="checkbox" ng-model="group.allFilter.selected"
                                         ng-change="toggleAllFilter(group)" />All
                              </label>
                          </div>
                      </li>
                      <li ng-repeat="item in group.itemsFiltered = (group.items | orderBy: ['+order', '-count', '-priorityorder', '+label.short'] | gtLimitToLastSelected:filterGroupDefaultLimit:group.overrideCustomFilter:group.overrideLimit:filterLimitMargin)"
                              
                              class="filter-group-list-item">
                          <div class="checkbox">
                              <label ng-class="{'selected': item.selected }"
                                      title="{{ item.label.long }}">
                                  <input type="checkbox" ng-model="item.selected"
                                          
                                          name="filters[{{ group.id }}][{{ item.id }}]"
                                          ng-model="item.selected" ng-change="change(group, item)" />
                                      {{ item.label.short }}
                                  <i class="fa fa-fw fa-question-circle text-med text-secondary pull-right"
                                          popover="{{ item.helpText }}"
                                          popover-append-to-body="true"
                                          ng-show="item.helpText">
                                  </i>
                              </label>
                              
                          </div>
                      </li>
                      <li>
                          <div ng-click="group.overrideCustomFilter = true; group.overrideLimit = 'all'" 
                                  ng-show="group.itemsFiltered.length < group.items.length"
                                  class="filter-group-toggle filter-group-expand">
                              <i class="fa fa-fw fa-plus-square text-section"></i><span class="text-sm text-muted">Show all</span>
                          </div>
                          <div ng-click="group.overrideCustomFilter = true; group.overrideLimit = filterGroupDefaultLimit" 
                                  ng-show="group.itemsFiltered.length >= group.items.length &amp;&amp; group.itemsFiltered.length > filterGroupDefaultLimit + filterLimitMargin" 
                                  class="filter-group-toggle filter-group-expand">
                              <i class="fa fa-fw fa-minus-square text-section"></i><span class="text-sm text-muted">Show less</span>
                          </div>
                      </li>
                  </ul>
               </script>
               <script type="text/ng-template" id="radio">
                  <h5 ng-click="groupToggle(group)"
                          class="filter-group-toggle filter-group-heading text-regular">
                      <i ng-class="{'fa-caret-down': !group.collapsed, 'fa-caret-right': group.collapsed}"
                              class="fa fa-fw text-section">
                      </i>By {{ group.label}}
                      <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                  </h5>
                  <ul collapse="group.collapsed" class="filter-group-list speedy">
                      <li ng-class="{ selected: group.allFilter.selected }" class="filter-group-list-item">
                          <div class="radio">
                              <label>
                                  <input type="radio"
                                          ng-model="group.allFilter.selected"
                                          value="1"
                                          ng-change="toggleAllFilter(group)" />All
                              </label>
                          </div>
                      </li>
                      <li ng-repeat="item in group.itemsFiltered = (group.items | orderBy: ['+order'] | gtLimitToLastSelected:filterGroupDefaultLimit:group.overrideCustomFilter:group.overrideLimit:filterLimitMargin)"
                              ng-class="{ disabled: (item.count == 0) }"
                              class="filter-group-list-item">
                          <div class="radio">
                              <label ng-class="{'selected':item.selected }"
                                      title="{{ item.label.long }}">
                                  <input type="radio"
                                          name="filters[{{ group.id }}]"
                                          value="1"
                                          ng-model="item.selected" ng-change="change(group, item)" />
                                      {{ item.label.short }}
                              </label>
                          </div>
                      </li>
                      <li>
                          <div ng-click="group.overrideCustomFilter = true; group.overrideLimit = 'all'"
                                  ng-show="group.itemsFiltered.length < group.items.length"
                                  class="filter-group-toggle filter-group-expand">
                              <i class="fa fa-fw fa-plus-square text-section"></i><span class="text-sm text-muted">Show all</span>
                          </div>
                          <div ng-click="group.overrideCustomFilter = true; group.overrideLimit = filterGroupDefaultLimit"
                                  ng-show="group.itemsFiltered.length >= group.items.length &amp;&amp; group.itemsFiltered.length > filterGroupDefaultLimit + filterLimitMargin"
                                  class="filter-group-toggle filter-group-expand">
                              <i class="fa fa-fw fa-minus-square text-section"></i><span class="text-sm text-muted">Show less</span>
                          </div>
                      </li>
                  </ul>
               </script>
               <script type="text/ng-template" id="typeahead">
                  <div ng-controller="facetedSearchTypeaheadFilterController">
                      <h5 ng-click="groupToggle(group)"
                              class="filter-group-toggle filter-group-heading text-regular"
                              ng-hide="group.headless">
                          <i ng-class="{'fa-caret-down': !group.collapsed, 'fa-caret-right': group.collapsed}"
                                  class="fa fa-fw text-section">
                          </i>By {{ group.label}}
                          <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                      </h5>
                      <h5 ng-show="group.subheading" class="text-muted">{{ group.subheading }}</h5>
                      <ul collapse="group.collapsed" 
                                                  class="filter-group-list speedy"
                              
                              ng-init="filterItems(group)">
                          <li ng-class="{ selected: group.allFilter.selected }" class="filter-group-list-item">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" ng-model="group.allFilter.selected"
                                             ng-change="toggleAllFilter(group)" />
                                          {{ group.labelForAll || 'All' }}
                                  </label>
                              </div>
                          </li>
                          <li ng-repeat="item in filteredItems[group.id]" class="filter-group-list-item">
                              <div class="checkbox">
                                  <label ng-class="{'selected': item.selected }"
                                          title="{{ item.label.long }}">
                                      <input type="checkbox" ng-model="item.selected"
                                              name="filters[{{ group.id }}][{{ item.id }}]"
                                              ng-model="item.selected" ng-change="change(group, item)" />
                                          {{ item.label.short }}
                                      <i class="fa fa-fw fa-question-circle text-med text-secondary pull-right"
                                              popover="{{ item.helpText }}"
                                              popover-append-to-body="true"
                                              ng-show="item.helpText">
                                      </i>
                                  </label>
                              </div>
                          </li>
                          <li class="space-top-sm" ng-show="(group.items | trimCollection:filteredItems[group.id]).length">
                              <input type="text"
                                      autocomplete="off"
                                      placeholder="{{ 'Add ' + group.label }}"
                                      name="pos_ref"
                                      ng-model="selectedItem"
                                      typeahead-min-length="0"
                                      typeahead-on-click="true"
                                      typeahead-class="dropdown-scrollable text-sm"
                                      typeahead="item as item.label.short for item in group.items | orderBy: '+label.short' | filter:{label.short:$viewValue} | trimCollection:filteredItems[group.id]"
                                      typeahead-on-select="updateFilteredItems(group, selectedItem)"
                                      class="form-control input-sm" />
                          </li>
                      </ul>
                  </div>
               </script>
               <script type="text/ng-template" id="mutableTypeahead">
                  <div ng-controller="facetedSearchTypeaheadFilterController">
                      <h5 ng-click="groupToggle(group)"
                              class="filter-group-toggle filter-group-heading text-regular"
                              ng-hide="group.headless">
                          <i ng-class="{'fa-caret-down': !group.collapsed, 'fa-caret-right': group.collapsed}"
                                  class="fa fa-fw text-section">
                          </i>By {{ group.label}}
                          <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                      </h5>
                      <h5 ng-show="group.subheading" class="text-muted">{{ group.subheading }}</h5>
                      <ul collapse="group.collapsed" 
                                                  class="filter-group-list speedy"
                              
                              ng-init="filterItems(group)">
                          <li ng-class="{ selected: group.allFilter.selected }" class="filter-group-list-item">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" ng-model="group.allFilter.selected"
                                             ng-change="toggleAllFilter(group)" />
                                          {{ group.labelForAll || 'All' }}
                                  </label>
                              </div>
                          </li>
                          <li ng-repeat="item in filteredItems[group.id]" class="filter-group-list-item">
                              <div class="checkbox">
                                  <label ng-class="{'selected': item.selected }"
                                          title="{{ item.label.long }}">
                                      <input type="checkbox"
                                              ng-model="item.selected"
                                              name="filters[{{ group.id }}][{{ item.id }}]"
                                              ng-model="item.selected"
                                              ng-change="change(group, item)" />
                                          {{ item.label.short }}
                                      <i class="fa fa-fw fa-question-circle text-med text-secondary pull-right"
                                              popover="{{ item.helpText }}"
                                              popover-append-to-body="true"
                                              ng-show="item.helpText">
                                      </i>
                                  </label>
                              </div>
                          </li>
                          <li class="space-top-sm"
                                  ng-show="group.items.length <= 20">
                              <div ng-click="group.overrideCustomFilter = true; group.overrideLimit = 'all'; filterItems(group)" 
                                      ng-show="filteredItems[group.id].length < group.items.length"
                                      class="filter-group-toggle filter-group-expand">
                                  <i class="fa fa-fw fa-plus-square text-section"></i><span class="text-sm text-muted">Show all</span>
                              </div>
                              <div ng-click="group.overrideCustomFilter = true; group.overrideLimit = filterGroupDefaultLimit; filterItems(group)" 
                                      ng-show="filteredItems[group.id].length >= group.items.length" 
                                      class="filter-group-toggle filter-group-expand">
                                  <i class="fa fa-fw fa-minus-square text-section"></i><span class="text-sm text-muted">Show less</span>
                              </div>
                          </li>
                          <li class="space-top-sm"
                                  ng-show="(group.items | trimCollection:filteredItems[group.id]).length &&
                                      group.items.length > 20">
                              <input type="text"
                                      autocomplete="off"
                                      placeholder="{{ 'Add ' + group.label }}"
                                      name="pos_ref"
                                      ng-model="selectedItem"
                                      typeahead-min-length="0"
                                      typeahead-on-click="true"
                                      typeahead-class="dropdown-scrollable text-sm"
                                      typeahead="item as item.label.short for item in group.items | orderBy: '+label.short' | filter:{label.short:$viewValue} | trimCollection:filteredItems[group.id]"
                                      typeahead-on-select="updateFilteredItems(group, selectedItem)"
                                      class="form-control input-sm" />
                          </li>
                      </ul>
                  </div>
               </script>
               <script type="text/ng-template" id="range">
                  <div ng-controller="facetedSearchRangeFilterController">
                      <h5 ng-click="groupToggle(group)" class="filter-group-toggle filter-group-heading text-regular"
                              ng-hide="group.headless">
                          <i ng-class="{'fa-caret-down': !group.collapsed, 'fa-caret-right': group.collapsed}"
                                  class="fa fa-fw text-section">
                          </i>By {{ group.label }}
                          <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                      </h5>
                      <ul collapse="group.collapsed" class="form-horizontal filter-group-list">
                          <li class="form-group filter-group-list-item">
                              <div class="select">
                                  <label title="Min {{ group.label }}" class="control-label col-sm-6">Min.</label>
                                  <div class="col-sm-18">
                                      <select class="form-control"
                                              ng-options="minItem.id as minItem.id for minItem in group.items"
                                              name="filters[{{ group.id }}][]"
                                              ng-model="minValue"
                                              ng-change="change(group, minValue, 'min')">
                                          <option value="" ng-model="group.allFilter.selected">Any</option>
                                      </select>
                                  </div>
                              </div>
                          </li>
                          <li class="form-group filter-group-list-item">
                              <div class="select">
                                  <label title="Max {{ group.label }}" class="control-label col-sm-6">Max.</label>
                                  <div class="col-sm-18">
                                      <select class="form-control"
                                              ng-options="maxItem.id as maxItem.id for maxItem in group.items"
                                              name="filters[{{ group.id }}][]"
                                              ng-model="maxValue"
                                              gt-type-greater-than="minValue"
                                              ng-change="change(group, maxValue, 'max')">
                                          <option value="" ng-model="group.allFilter.selected">Any</option>
                                      </select>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
               </script>
               <script type="text/ng-template" id="freeRange">
                  <div ng-controller="facetedSearchFreeRangeFilterController">
                      <h5 ng-click="groupToggle(group)" class="filter-group-toggle filter-group-heading text-regular"
                              ng-hide="group.headless">
                          <i ng-class="{'fa-caret-down': !group.collapsed, 'fa-caret-right': group.collapsed}"
                                  class="fa fa-fw text-section">
                          </i>By {{ group.label }}
                          <i class="fa fa-lock pull-right text-muted" ng-show="group.locked"></i>
                      </h5>
                  
                      <div class="row form-horizontal filter-group-list" collapse="group.collapsed">
                          <div class="col-xs-11 text-center">
                              <div class="form-group">
                                  <label title="Min {{ group.label }}" class="control-label col-sm-6 text-muted">Min.</label>
                                  <input type="text"
                                          class="form-control"
                                          name="filters[{{ group.id }}][]"
                                          ng-model="minValue"
                                          placeholder="Any"
                                          ng-change="change(group, minValue, 'min')" >
                              </div>
                          </div>
                          <div class="col-xs-2 text-center col-middle space-top-xl">-</div>
                          <div class="col-xs-11 text-center">
                              <div class="form-group">
                                  <label title="Max {{ group.label }}" class="control-label col-sm-6 text-muted">Max.</label>
                                  <input type="text"
                                          class="form-control"
                                          name="filters[{{ group.id }}][]"
                                          placeholder="Any"
                                          ng-model="maxValue"
                                          ng-change="change(group, maxValue, 'max')" >
                              </div>
                          </div>
                      </div>
                      
                  </div>
                  
               </script>
               </script>
            </div>
            <div class="col-sm-18 reset-width">
               <div scroll-to-fix
                  collapsible-element-id="facetedSearchResults"
                  class="spinner-container clearfix">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <h5 class="text-muted">
                           31 Jobs found:
                           <span class="text-supermuted text-sm text-body">Showing
                           1 -
                           25</span>
                        </h5>
                        <table class="table table-section table-condensed table-hover table-fixed">
                           <thead>
                              <tr>
                                 <th class="col-sm-1-5"></th>
                                 <th class="col-sm-13">Position</th>
                                 <th class="col-sm-4">Location</th>
                                 <th class="col-sm-2-5">Date</th>
                                 <th class="text-center col-sm-3">Company</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    1
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Recruitment Researcher - Internship"
                                       href="../uae/jobs/recruitment-researcher-internship-245302.html" >
                                    <strong>
                                    Recruitment Researcher - Internship
                                    </strong>
                                    </a>
                                    <br />
                                    Michael Page
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Dubai, UAE">
                                    Dubai
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    14 Mar
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/michael-page.html" target="_blank">
                                    <img title="See all jobs by Michael Page"
                                       src="../images1/logos/listing/HE350-1411_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    2
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Secretary"
                                       href="../saudi-arabia/jobs/secretary-245156.html" >
                                    <strong>
                                    Secretary
                                    </strong>
                                    </a>
                                    <br />
                                    Ali Zaid Al-Quraishi &amp; Brothers Company (AZAQ)
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Saudi Arabia">
                                    Saudi Arabia
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    13 Mar
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/ali-zaid-al-quraishi-brothers-company-azaq.html" target="_blank">
                                    <img title="See all jobs by Ali Zaid Al-Quraishi &amp; Brothers Company (AZAQ)"
                                       src="../images1/logos/listing/KE126-2186_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    3
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Sales Representative"
                                       href="../uae/jobs/sales-representative-245149.html" >
                                    <strong>
                                    Sales Representative
                                    </strong>
                                    </a>
                                    <br />
                                    JNK Services DMCC
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Dubai, UAE">
                                    Dubai
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    12 Mar
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/jnk-services-dmcc.html" target="_blank">
                                    <img title="See all jobs by JNK Services DMCC"
                                       src="../images1/logos/listing/RE024-9080_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    4
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Fashion Internship - Retail/ Wholesale for British Brand"
                                       href="../uae/jobs/fashion-internship-retail-wholesale-for-british-brand-244989.html" >
                                    <strong>
                                    Fashion Internship - Retail/ Wholesale for British Brand
                                    </strong>
                                    </a>
                                    <br />
                                    British Company with an Expanding Office in Dubai
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Dubai, UAE">
                                    Dubai
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    11 Mar
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <img src="../images/logo-is-confidentiala95c.png?v2_68_0" />
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    5
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Receptionist/ Administrator Intern - Fun British Company"
                                       href="../uae/jobs/receptionist-administrator-intern-fun-british-company-244730.html" >
                                    <strong>
                                    Receptionist/ Administrator Intern - Fun British Company
                                    </strong>
                                    </a>
                                    <br />
                                    British Company with an Expanding Office in Dubai
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Dubai, UAE">
                                    Dubai
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    6 Mar
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <img src="../images/logo-is-confidentiala95c.png?v2_68_0" />
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    6
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Administrator/ Secretary Internship - Fun British Company"
                                       href="../uae/jobs/administrator-secretary-internship-fun-british-company-244729.html" >
                                    <strong>
                                    Administrator/ Secretary Internship - Fun British Company
                                    </strong>
                                    </a>
                                    <br />
                                    British Company with an Expanding Office in Dubai
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Dubai, UAE">
                                    Dubai
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    6 Mar
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <img src="../images/logo-is-confidentiala95c.png?v2_68_0" />
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    7
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Human Resources Assistant Intern - UK Company"
                                       href="../uae/jobs/human-resources-assistant-intern-uk-company-244728.html" >
                                    <strong>
                                    Human Resources Assistant Intern - UK Company
                                    </strong>
                                    </a>
                                    <br />
                                    British Company with an Expanding Office in Dubai
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Dubai, UAE">
                                    Dubai
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    6 Mar
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <img src="../images/logo-is-confidentiala95c.png?v2_68_0" />
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    8
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="HR/ Recruitment Intern - UK Company"
                                       href="../uae/jobs/hr-recruitment-intern-uk-company-244727.html" >
                                    <strong>
                                    HR/ Recruitment Intern - UK Company
                                    </strong>
                                    </a>
                                    <br />
                                    British Company with an Expanding Office in Dubai
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Dubai, UAE">
                                    Dubai
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    6 Mar
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <img src="../images/logo-is-confidentiala95c.png?v2_68_0" />
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    9
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Junior Administrator - Internship with British Recruitment Company"
                                       href="../uae/jobs/junior-administrator-internship-with-british-recruitment-company-244726.html" >
                                    <strong>
                                    Junior Administrator - Internship with British Recruitment Company
                                    </strong>
                                    </a>
                                    <br />
                                    British Company with an Expanding Office in Dubai
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Dubai, UAE">
                                    Dubai
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    6 Mar
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <img src="../images/logo-is-confidentiala95c.png?v2_68_0" />
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    10
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Customer Service/ HR Intern - Fun, UK Company"
                                       href="../uae/jobs/customer-service-hr-intern-fun-uk-company-244725.html" >
                                    <strong>
                                    Customer Service/ HR Intern - Fun, UK Company
                                    </strong>
                                    </a>
                                    <br />
                                    British Company with an Expanding Office in Dubai
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Dubai, UAE">
                                    Dubai
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    6 Mar
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <img src="../images/logo-is-confidentiala95c.png?v2_68_0" />
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    11
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Research Analyst / Manager"
                                       href="../bahrain/jobs/research-analyst-manager-244593.html" >
                                    <strong>
                                    Research Analyst / Manager
                                    </strong>
                                    </a>
                                    <br />
                                    Gulf Researcher
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Bahrain">
                                    Bahrain
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    3 Mar
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/gulf-researcher.html" target="_blank">
                                    <img title="See all jobs by Gulf Researcher"
                                       src="../images1/logos/listing/OE271-6327_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    12
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Fluent Cantonese/Mandarin speaking Office Assistant"
                                       href="../uae/jobs/fluent-cantonese-mandarin-speaking-office-assistant-244226.html" >
                                    <strong>
                                    Fluent Cantonese/Mandarin speaking Office Assistant
                                    </strong>
                                    </a>
                                    <br />
                                    British Company with an Expanding Office in Dubai
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="UAE">
                                    UAE
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    25 Feb
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <img src="../images/logo-is-confidentiala95c.png?v2_68_0" />
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    13
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="HR &amp; Admin Assistant Intern - Fluent in Cantonese/Mandarin"
                                       href="../uae/jobs/hr-admin-assistant-intern-fluent-in-cantonese-mandarin-244224.html" >
                                    <strong>
                                    HR &amp; Admin Assistant Intern - Fluent in Cantonese/Mandarin
                                    </strong>
                                    </a>
                                    <br />
                                    British Company with an Expanding Office in Dubai
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Dubai, UAE">
                                    Dubai
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    25 Feb
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <img src="../images/logo-is-confidentiala95c.png?v2_68_0" />
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    14
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Junior Indoor Sales"
                                       href="../qatar/jobs/junior-indoor-sales-244172.html" >
                                    <strong>
                                    Junior Indoor Sales
                                    </strong>
                                    </a>
                                    <br />
                                    Direct Trading Technologies
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Qatar">
                                    Qatar
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    22 Feb
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/direct-trading-technologies.html" target="_blank">
                                    <img title="See all jobs by Direct Trading Technologies"
                                       src="../images1/logos/listing/RE266-9322_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    15
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Analyst Intern"
                                       href="../uae/jobs/analyst-intern-244080.html" >
                                    <strong>
                                    Analyst Intern
                                    </strong>
                                    </a>
                                    <br />
                                    Quest Search &amp; Selection
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="UAE">
                                    UAE
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    21 Feb
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/quest-search-selection.html" target="_blank">
                                    <img title="See all jobs by Quest Search &amp; Selection"
                                       src="../images1/logos/listing/GE340-398_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    16
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="International Graduate - Commercial Banking"
                                       href="../qatar/jobs/international-graduate-commercial-banking-244032.html" >
                                    <strong>
                                    International Graduate - Commercial Banking
                                    </strong>
                                    </a>
                                    <br />
                                    Standard Chartered Bank - UAE
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Qatar">
                                    Qatar
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    21 Feb
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/standard-chartered-bank-uae.html" target="_blank">
                                    <img title="See all jobs by Standard Chartered Bank - UAE"
                                       src="../images1/logos/listing/HE048-1109_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    17
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="International Graduate"
                                       href="../bahrain/jobs/international-graduate-244028.html" >
                                    <strong>
                                    International Graduate
                                    </strong>
                                    </a>
                                    <br />
                                    Standard Chartered Bank - UAE
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Bahrain">
                                    Bahrain
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    21 Feb
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/standard-chartered-bank-uae.html" target="_blank">
                                    <img title="See all jobs by Standard Chartered Bank - UAE"
                                       src="../images1/logos/listing/HE048-1109_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    18
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Accounting Manager"
                                       href="../bahrain/jobs/accounting-manager-242568.html" >
                                    <strong>
                                    Accounting Manager
                                    </strong>
                                    </a>
                                    <br />
                                    Azadea Group - Lebanon
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Bahrain">
                                    Bahrain
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    21 Feb
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/azadea-group-lebanon.html" target="_blank">
                                    <img title="See all jobs by Azadea Group - Lebanon"
                                       src="../images1/logos/listing/KE561-2621_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    19
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Trainee Recruitment Consultant - 3 Months Internship"
                                       href="../uae/jobs/trainee-recruitment-consultant-3-months-internship-223389.html" >
                                    <strong>
                                    Trainee Recruitment Consultant - 3 Months Internship
                                    </strong>
                                    </a>
                                    <br />
                                    NSI &amp; Bluefin Talent
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Dubai, UAE">
                                    Dubai
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    20 Feb
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/nsi-bluefin-talent.html" target="_blank">
                                    <img title="See all jobs by NSI &amp; Bluefin Talent"
                                       src="../images1/logos/listing/KE709-2769_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    20
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Authority Liaison Coordinator"
                                       href="../uae/jobs/authority-liaison-coordinator-243907.html" >
                                    <strong>
                                    Authority Liaison Coordinator
                                    </strong>
                                    </a>
                                    <br />
                                    WSP
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Dubai, UAE">
                                    Dubai
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    19 Feb
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/wsp.html" target="_blank">
                                    <img title="See all jobs by WSP"
                                       src="../images1/logos/listing/HE362-1423_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    21
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Accounting Specialist"
                                       href="http://jobs/accounting-specialist-243109" >
                                    <strong>
                                    Accounting Specialist
                                    </strong>
                                    </a>
                                    <br />
                                    Azadea Group - Lebanon
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="">
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    12 Feb
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/azadea-group-lebanon.html" target="_blank">
                                    <img title="See all jobs by Azadea Group - Lebanon"
                                       src="../images1/logos/listing/KE561-2621_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    22
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Research Analyst / Manager"
                                       href="../bahrain/jobs/research-analyst-manager-243169.html" >
                                    <strong>
                                    Research Analyst / Manager
                                    </strong>
                                    </a>
                                    <br />
                                    Gulf Researcher
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Bahrain">
                                    Bahrain
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    9 Feb
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/gulf-researcher.html" target="_blank">
                                    <img title="See all jobs by Gulf Researcher"
                                       src="../images1/logos/listing/OE271-6327_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    23
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Arabic/English KSA National Receptionist for A Multinational Companies"
                                       href="../saudi-arabia/jobs/arabic-english-ksa-national-receptionist-for-a-multinational-companies-242979.html" >
                                    <strong>
                                    Arabic/English KSA National Receptionist for A Multinational Companies
                                    </strong>
                                    </a>
                                    <br />
                                    RecruitME
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Riyadh, Saudi Arabia">
                                    Riyadh
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    7 Feb
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/recruitme.html" target="_blank">
                                    <img title="See all jobs by RecruitME"
                                       src="../images1/logos/listing/QE103-7158_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    24
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="HR Database Administrator/Project Management Assistant"
                                       href="../uae/jobs/hr-database-administrator-project-management-assistant-242973.html" >
                                    <strong>
                                    HR Database Administrator/Project Management Assistant
                                    </strong>
                                    </a>
                                    <br />
                                    RecruitME
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Dubai, UAE">
                                    Dubai
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    7 Feb
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/recruitme.html" target="_blank">
                                    <img title="See all jobs by RecruitME"
                                       src="../images1/logos/listing/QE103-7158_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="col-sm-3 text-center">
                                    25
                                 </td>
                                 <td class="col-sm-21 text-overflow text-muted">
                                    <a class="text-base title
                                       "
                                       target="_blank"
                                       popover="Customer Service Representative"
                                       href="../bahrain/jobs/customer-service-representative-242882.html" >
                                    <strong>
                                    Customer Service Representative
                                    </strong>
                                    </a>
                                    <br />
                                    Propel Consult
                                 </td>
                                 <td class="text-overflow col-sm-6">
                                    <span title="Bahrain">
                                    Bahrain
                                    </span>
                                 </td>
                                 <td class="col-sm-4">
                                    6 Feb
                                 </td>
                                 <td class="text-center col-sm-5">
                                    <a href="../companies/propel-consult.html" target="_blank">
                                    <img title="See all jobs by Propel Consult"
                                       src="../images1/logos/listing/LE127-3186_logoa95c.png?v2_68_0"/>
                                    </a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <div class="text-center">
                           <ul class="pagination">
                              <li class="jumper disabled">
                                 <a href="graduates2679.html?page=1">First</a>
                              </li>
                              <li class="active"><a>1</a></li>
                              <li>
                                 <a href="graduates4658.html?page=2">
                                 2
                                 </a>
                              </li>
                              <li class="jumper">
                                 <a href="graduates4658.html?page=2">Next</a>
                              </li>
                              <li class="jumper ">
                                 <a                         href="graduates4658.html?page=2"
                                    >
                                 Last
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="hidden-print list-group">
                        <a class="list-group-item" href="../register/jobalert.html">
                        <i class="fa fa-fw fa-chevron-right"></i>
                        Sign up for Job Alerts
                        </a>
                     </div>
                  </div>
                  <div class="hidden-print text-center">
                     <div gt-ad
                        gt-ad-name="executive_horizontalbanner"
                        gt-ad-width="728"
                        gt-ad-height="90"
                        gt-ad-refresh-on="facetedSearch.filter:changed facetedSearch.form:submitted"
                        gt-hide-on="gtCollapse.facetedSearchResults:collapsing"
                        gt-show-on="gtCollapse.facetedSearchResults:expanded"
                        ng-cloak=""
                        >
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <section ng-controller="widgetFeedbackController">
      <div class="fade"
         ng-class="{'modal-backdrop in': !isWidgetCollapsed}"
         ng-click="isWidgetCollapsed=true"
         ng-init="isWidgetCollapsed=true"></div>
      <div class="feedback-btn-container affix-bottom affix-right space-right-base" ng-cloak>
         <div class="text-right">
            <button ng-click="isWidgetCollapsed=!isWidgetCollapsed"
               class="btn btn-default btn-secondary"
               id="feedback">
            Feedback
            <i class="fa fa-fw"
               ng-class="{
               'fa-angle-up': isWidgetCollapsed,
               'fa-angle-down': !isWidgetCollapsed
               }"></i>
            </button>
         </div>
         <div class="panel panel-default space-bottom-none"
            gt-collapse="isWidgetCollapsed"
            collapse="isCollapsed"
            id="feedback">
            <div class="panel-heading" ng-hide="formSubmitted">
               <h3 class="panel-title">Tell us your feedback</h3>
            </div>
            <div class="panel-body" ng-hide="formSubmitted">
               <form class="form-horizontal" role="form" novalidate name="contact-us-form"
                  gt-validate
                  gt-submit="submit()">
                  <div class="form-group">
                     <div class="col-sm-20 col-sm-offset-2">
                        <input type="text" id="contact_us_name" name="contact_us[name]" required="required"    class="form-control" ng-model="form.name" gt-model-value="" message="Please enter name!" placeholder="Your Name" />
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-20 col-sm-offset-2">
                        <input type="email" id="contact_us_email" name="contact_us[email]" required="required"    class="form-control" ng-model="form.email" gt-model-value="" message="Please enter a valid Email Address!" placeholder="Your Email Address" />
                     </div>
                  </div>
                  <div class="form-group space-bottom-base">
                     <div class="col-sm-20 col-sm-offset-2">
                        <textarea id="contact_us_message" name="contact_us[message]" required="required"    class="form-control" rows="8" ng-model="form.message" placeholder="Your comments/suggestions on the site"></textarea>
                     </div>
                  </div>
                  <div class="form-group space-bottom-base">
                     <div class="col-sm-offset-7 col-sm-10">
                        <button type="submit"
                           value="submit"
                           class="btn btn-secondary btn-lg btn-block">
                        Submit
                        </button>
                     </div>
                  </div>
                  <input type="hidden"
                     value="Feedback"
                     ng-model="form.subject"
                     gt-model-value="" />
                  <input type="hidden"
                     value="feedback"
                     ng-model="form.type"
                     gt-model-value="" />
               </form>
            </div>
            <div class="panel-body" ng-show="formSubmitted">
               <strong class="text-success" ng-show="successFlag">
               Thank you for your Feedback.
               </strong>
               <strong class="text-danger" ng-hide="successFlag">
               Something went wrong. Please try again.
               </strong>
            </div>
         </div>
      </div>
   </section>
   <section class="floating-widget-container affix-left center hidden-print">
      <ul class="list-social list-unstyled space-all-none">
         <li class="social-legend text-sm space-all-none">
            Share page
         </li>
         <li class="space-all-none">
            <a gt-share="facebook"
               gt-share-url="https://www.gulftalent.com/jobs/graduates?page=1"
               title="Share via Facebook"
               class="bg-brand-facebook">
            <i class="fa fa-facebook"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a gt-share="googleplus"
               gt-share-url="https://www.gulftalent.com/jobs/graduates?page=1"
               title="Share via Google+"
               class="bg-brand-google-plus">
            <i class="fa fa-google-plus"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a gt-share="twitter"
               gt-share-url="https://www.gulftalent.com/jobs/graduates?page=1"
               title="Share via Twitter"
               class="bg-brand-twitter">
            <i class="fa fa-twitter"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a gt-share="linkedin"
               gt-share-url="https://www.gulftalent.com/jobs/graduates?page=1"
               title="Share via LinkedIn"
               class="bg-brand-linkedin">
            <i class="fa fa-linkedin"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a gt-share="messenger"
               gt-share-url="https://www.gulftalent.com/jobs/graduates?page=1"
               title="Share via Facebook Messenger"
               class="bg-brand-messenger">
            <i class="fa fa-facebook-messenger"></i>
            </a>
         </li>
         <li class="space-all-none">
            <a gt-refer-form
               refer-type="MiscPages"
               refer-label=""
               refer-url="https://www.gulftalent.com/jobs/graduates?page=1"
               refer-generated-from=""
               refer-description="[]"
               refer-heading="Email this page to a friend"
               class="bg-brand-envelope">
            <i class="fa fa-envelope" title="Share via Email"></i>
            </a>
         </li>
      </ul>
   </section>
</main>-->

<?php include('../footer.php'); ?>