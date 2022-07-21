/* global instantsearch algoliasearch */

const search = instantsearch({
  indexName: 'dev_AlgoliaAssignment',
  searchClient: algoliasearch('JQHM0HYZMS', 'c2a8d3bb86175424735d7ccd5e81a641'),
});

search.addWidgets([
  instantsearch.widgets.searchBox({
    container: '#searchbox',
  }),
  instantsearch.widgets.clearRefinements({
    container: '#clear-refinements',
  }),
  instantsearch.widgets.refinementList({
    container: '#brand-list',
    attribute: 'brand',
  }),
  instantsearch.widgets.refinementList({
    container: '#categories-list',
    attribute: 'categories',
  }),
  instantsearch.widgets.refinementList({
    container: '#type-list',
    attribute: 'type',
  }),
  instantsearch.widgets.hits({
    container: '#hits',
    templates: {
      item: `
        <div>
          <img src="{{image}}" align="left" alt="{{name}}" />
          <div class="hit-name">
            {{#helpers.highlight}}{ "attribute": "name" }{{/helpers.highlight}}
          </div>
          <div class="hit-description">
            {{#helpers.highlight}}{ "attribute": "description" }{{/helpers.highlight}}
          </div>
          <div class="hit-brand">Brand:-
            {{#helpers.highlight}}{ "attribute": "brand" }{{/helpers.highlight}}
          </div>
          <div class="hit-type">Type:-
            {{#helpers.highlight}}{ "attribute": "type" }{{/helpers.highlight}}
          </div>
          <div class="hit-price">\${{price}}</div>
        </div>
      `,
    },
  }),
  instantsearch.widgets.pagination({
    container: '#pagination',
  }),
]);

search.start();
