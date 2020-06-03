<?php

/** @noinspection ALL */

/**
 * A helper file for Laravel 5, to provide autocomplete information to your IDE
 * Generated for Laravel 5.5.13 on 2017-09-28.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace {

    exit("This file should not be included, only analyzed by your IDE");
}

namespace Illuminate\Database\Eloquent {

    class Model
    {
        /**
         * Create a new Eloquent model instance.
         *
         * @param  array  $attributes
         * @return void
         */
        public function __construct(array $attributes = [])
        {
            //
        }

        /**
         * Create and return an un-saved model instance.
         *
         * @param  array  $attributes
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function make($attributes = [])
        {
            return self::query()->make($attributes);
        }

        /**
         * Register a new global scope.
         *
         * @param  string  $identifier
         * @param  \Illuminate\Database\Eloquent\Scope|\Closure  $scope
         * @return $this
         * @static
         */
        public static function withGlobalScope($identifier, $scope)
        {
            return self::query()->withGlobalScope($identifier, $scope);
        }

        /**
         * Remove a registered global scope.
         *
         * @param  \Illuminate\Database\Eloquent\Scope|string  $scope
         * @return $this
         * @static
         */
        public static function withoutGlobalScope($scope)
        {
            return self::query()->withoutGlobalScope($scope);
        }

        /**
         * Remove all or passed registered global scopes.
         *
         * @param  array|null  $scopes
         * @return $this
         * @static
         */
        public static function withoutGlobalScopes($scopes = null)
        {
            return self::query()->withoutGlobalScopes($scopes);
        }

        /**
         * Get an array of global scopes that were removed from the query.
         *
         * @return array
         * @static
         */
        public static function removedScopes()
        {
            return self::query()->removedScopes();
        }

        /**
         * Add a where clause on the primary key to the query.
         *
         * @param  mixed  $id
         * @return $this
         * @static
         */
        public static function whereKey($id)
        {
            return self::query()->whereKey($id);
        }

        /**
         * Add a basic where clause to the query, and return the first result.
         *
         * @param  \Closure|string|array  $column
         * @param  mixed  $operator
         * @param  mixed  $value
         * @param  string  $boolean
         * @return \Illuminate\Database\Eloquent\Model|static
         */
        public static function firstWhere($column, $operator = null, $value = null, $boolean = 'and')
        {
            return self::query()->firstWhere($column, $operator, $value, $boolean);
        }

        /**
         * Add a where clause on the primary key to the query.
         *
         * @param  mixed  $id
         * @return $this
         * @static
         */
        public static function whereKeyNot($id)
        {
            return self::query()->whereKeyNot($id);
        }

        /**
         * Add a basic where clause to the query.
         *
         * @param  string|array|\Closure  $column
         * @param  string  $operator
         * @param  mixed  $value
         * @param  string  $boolean
         * @return $this
         * @static
         */
        public static function where($column, $operator = null, $value = null, $boolean = 'and')
        {
            return self::query()->where($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where" clause to the query.
         *
         * @param  \Closure|array|string  $column
         * @param  string  $operator
         * @param  mixed  $value
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhere($column, $operator = null, $value = null)
        {
            return self::query()->orWhere($column, $operator, $value);
        }

        /**
         * Create a collection of models from plain arrays.
         *
         * @param  array  $items
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static function hydrate($items)
        {
            return self::query()->hydrate($items);
        }

        /**
         * Create a collection of models from a raw query.
         *
         * @param  string  $query
         * @param  array  $bindings
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static function fromQuery($query, $bindings = array())
        {
            return self::query()->fromQuery($query, $bindings);
        }

        /**
         * Find a model by its primary key.
         *
         * @param  mixed  $id
         * @param  array  $columns
         * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
         * @static
         */
        public static function find($id, $columns = array())
        {
            return self::query()->find($id, $columns);
        }

        /**
         * Find multiple models by their primary keys.
         *
         * @param  \Illuminate\Contracts\Support\Arrayable|array  $ids
         * @param  array  $columns
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static function findMany($ids, $columns = array())
        {
            return self::query()->findMany($ids, $columns);
        }

        /**
         * Find a model by its primary key or throw an exception.
         *
         * @param  mixed  $id
         * @param  array  $columns
         * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         * @static
         */
        public static function findOrFail($id, $columns = array())
        {
            return self::query()->findOrFail($id, $columns);
        }

        /**
         * Find a model by its primary key or return fresh model instance.
         *
         * @param  mixed  $id
         * @param  array  $columns
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function findOrNew($id, $columns = array())
        {
            return self::query()->findOrNew($id, $columns);
        }

        /**
         * Get the first record matching the attributes or instantiate it.
         *
         * @param  array  $attributes
         * @param  array  $values
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function firstOrNew($attributes, $values = array())
        {
            return self::query()->firstOrNew($attributes, $values);
        }

        /**
         * Get the first record matching the attributes or create it.
         *
         * @param  array  $attributes
         * @param  array  $values
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function firstOrCreate($attributes, $values = array())
        {
            return self::query()->firstOrCreate($attributes, $values);
        }

        /**
         * Create or update a record matching the attributes, and fill it with values.
         *
         * @param  array  $attributes
         * @param  array  $values
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function updateOrCreate($attributes, $values = array())
        {
            return self::query()->updateOrCreate($attributes, $values);
        }

        /**
         * Execute the query and get the first result or throw an exception.
         *
         * @param  array  $columns
         * @return \Illuminate\Database\Eloquent\Model|static
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         * @static
         */
        public static function firstOrFail($columns = array())
        {
            return self::query()->firstOrFail($columns);
        }

        /**
         * Execute the query and get the first result or call a callback.
         *
         * @param  \Closure|array  $columns
         * @param  \Closure|null  $callback
         * @return \Illuminate\Database\Eloquent\Model|static|mixed
         * @static
         */
        public static function firstOr($columns = array(), $callback = null)
        {
            return self::query()->firstOr($columns, $callback);
        }

        /**
         * Get a single column's value from the first result of a query.
         *
         * @param  string  $column
         * @return mixed
         * @static
         */
        public static function value($column)
        {
            return self::query()->value($column);
        }

        /**
         * Execute the query as a "select" statement.
         *
         * @param  array  $columns
         * @return \Illuminate\Database\Eloquent\Collection|static[]
         * @static
         */
        public static function get($columns = array())
        {
            return self::query()->get($columns);
        }

        /**
         * Get the hydrated models without eager loading.
         *
         * @param  array  $columns
         * @return \Illuminate\Database\Eloquent\Model[]
         * @static
         */
        public static function getModels($columns = array())
        {
            return self::query()->getModels($columns);
        }

        /**
         * Eager load the relationships for the models.
         *
         * @param  array  $models
         * @return array
         * @static
         */
        public static function eagerLoadRelations($models)
        {
            return self::query()->eagerLoadRelations($models);
        }

        /**
         * Get a generator for the given query.
         *
         * @return \Generator
         * @static
         */
        public static function cursor()
        {
            return self::query()->cursor();
        }

        /**
         * Chunk the results of a query by comparing numeric IDs.
         *
         * @param  int  $count
         * @param  callable  $callback
         * @param  string  $column
         * @param  string|null  $alias
         * @return bool
         * @static
         */
        public static function chunkById($count, $callback, $column = null, $alias = null)
        {
            return self::query()->chunkById($count, $callback, $column, $alias);
        }

        /**
         * Get an array with the values of a given column.
         *
         * @param  string  $column
         * @param  string|null  $key
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function pluck($column, $key = null)
        {
            return self::query()->pluck($column, $key);
        }

        /**
         * Paginate the given query.
         *
         * @param  int  $perPage
         * @param  array  $columns
         * @param  string  $pageName
         * @param  int|null  $page
         * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
         * @throws \InvalidArgumentException
         * @static
         */
        public static function paginate($perPage = null, $columns = array(), $pageName = 'page', $page = null)
        {
            return self::query()->paginate($perPage, $columns, $pageName, $page);
        }

        /**
         * Paginate the given query into a simple paginator.
         *
         * @param  int  $perPage
         * @param  array  $columns
         * @param  string  $pageName
         * @param  int|null  $page
         * @return \Illuminate\Contracts\Pagination\Paginator
         * @static
         */
        public static function simplePaginate($perPage = null, $columns = array(), $pageName = 'page', $page = null)
        {
            return self::query()->simplePaginate($perPage, $columns, $pageName, $page);
        }

        /**
         * Save a new model and return the instance.
         *
         * @param  array  $attributes
         * @return \Illuminate\Database\Eloquent\Model|$this
         * @static
         */
        public static function create($attributes = array())
        {
            return self::query()->create($attributes);
        }

        /**
         * Save a new model and return the instance. Allow mass-assignment.
         *
         * @param  array  $attributes
         * @return \Illuminate\Database\Eloquent\Model|$this
         * @static
         */
        public static function forceCreate($attributes)
        {
            return self::query()->forceCreate($attributes);
        }

        /**
         * Register a replacement for the default delete function.
         *
         * @param  \Closure  $callback
         * @return void
         * @static
         */
        public static function onDelete($callback)
        {
            self::query()->onDelete($callback);
        }

        /**
         * Call the given local model scopes.
         *
         * @param  array  $scopes
         * @return mixed
         * @static
         */
        public static function scopes($scopes)
        {
            return self::query()->scopes($scopes);
        }

        /**
         * Apply the scopes to the Eloquent builder instance and return it.
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function applyScopes()
        {
            return self::query()->applyScopes();
        }

        /**
         * Prevent the specified relations from being eager loaded.
         *
         * @param  mixed  $relations
         * @return $this
         * @static
         */
        public static function without($relations)
        {
            return self::query()->without($relations);
        }

        /**
         * Create a new instance of the model being queried.
         *
         * @param  array  $attributes
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function newModelInstance($attributes = array())
        {
            return self::query()->newModelInstance($attributes);
        }

        /**
         * Get the underlying query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function getQuery()
        {
            return self::query()->getQuery();
        }

        /**
         * Set the underlying query builder instance.
         *
         * @param  \Illuminate\Database\Query\Builder  $query
         * @return $this
         * @static
         */
        public static function setQuery($query)
        {
            return self::query()->setQuery($query);
        }

        /**
         * Get a base query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function toBase()
        {
            return self::query()->toBase();
        }

        /**
         * Get the relationships being eagerly loaded.
         *
         * @return array
         * @static
         */
        public static function getEagerLoads()
        {
            return self::query()->getEagerLoads();
        }

        /**
         * Set the relationships being eagerly loaded.
         *
         * @param  array  $eagerLoad
         * @return $this
         * @static
         */
        public static function setEagerLoads($eagerLoad)
        {
            return self::query()->setEagerLoads($eagerLoad);
        }

        /**
         * Get the model instance being queried.
         *
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function getModel()
        {
            return self::query()->getModel();
        }

        /**
         * Set a model instance for the model being queried.
         *
         * @param  \Illuminate\Database\Eloquent\Model  $model
         * @return $this
         * @static
         */
        public static function setModel($model)
        {
            return self::query()->setModel($model);
        }

        /**
         * Get the given macro by name.
         *
         * @param  string  $name
         * @return \Closure
         * @static
         */
        public static function getMacro($name)
        {
            return self::query()->getMacro($name);
        }

        /**
         * Chunk the results of the query.
         *
         * @param  int  $count
         * @param  callable  $callback
         * @return bool
         * @static
         */
        public static function chunk($count, $callback)
        {
            return self::query()->chunk($count, $callback);
        }

        /**
         * Execute a callback over each item while chunking.
         *
         * @param  callable  $callback
         * @param  int  $count
         * @return bool
         * @static
         */
        public static function each($callback, $count = 1000)
        {
            return self::query()->each($callback, $count);
        }

        /**
         * Execute the query and get the first result.
         *
         * @param  array  $columns
         * @return \Illuminate\Database\Eloquent\Model|static|null
         * @static
         */
        public static function first($columns = array())
        {
            return self::query()->first($columns);
        }

        /**
         * Apply the callback's query changes if the given "value" is true.
         *
         * @param  mixed  $value
         * @param  callable  $callback
         * @param  callable  $default
         * @return mixed
         * @static
         */
        public static function when($value, $callback, $default = null)
        {
            return self::query()->when($value, $callback, $default);
        }

        /**
         * Pass the query to a given callback.
         *
         * @param  \Closure  $callback
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function tap($callback)
        {
            return self::query()->tap($callback);
        }

        /**
         * Apply the callback's query changes if the given "value" is false.
         *
         * @param  mixed  $value
         * @param  callable  $callback
         * @param  callable  $default
         * @return mixed
         * @static
         */
        public static function unless($value, $callback, $default = null)
        {
            return self::query()->unless($value, $callback, $default);
        }

        /**
         * Add a relationship count / exists condition to the query.
         *
         * @param  string  $relation
         * @param  string  $operator
         * @param  int  $count
         * @param  string  $boolean
         * @param  \Closure|null  $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
        {
            return self::query()->has($relation, $operator, $count, $boolean, $callback);
        }

        /**
         * Add a relationship count / exists condition to the query with an "or".
         *
         * @param  string  $relation
         * @param  string  $operator
         * @param  int  $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orHas($relation, $operator = '>=', $count = 1)
        {
            return self::query()->orHas($relation, $operator, $count);
        }

        /**
         * Add a relationship count / exists condition to the query.
         *
         * @param  string  $relation
         * @param  string  $boolean
         * @param  \Closure|null  $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function doesntHave($relation, $boolean = 'and', $callback = null)
        {
            return self::query()->doesntHave($relation, $boolean, $callback);
        }

        /**
         * Add a relationship count / exists condition to the query with an "or".
         *
         * @param  string  $relation
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orDoesntHave($relation)
        {
            return self::query()->orDoesntHave($relation);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * @param  string  $relation
         * @param  \Closure|null  $callback
         * @param  string  $operator
         * @param  int  $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereHas($relation, $callback = null, $operator = '>=', $count = 1)
        {
            return self::query()->whereHas($relation, $callback, $operator, $count);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param  string  $relation
         * @param  \Closure  $callback
         * @param  string  $operator
         * @param  int  $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
        {
            return self::query()->orWhereHas($relation, $callback, $operator, $count);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * @param  string  $relation
         * @param  \Closure|null  $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereDoesntHave($relation, $callback = null)
        {
            return self::query()->whereDoesntHave($relation, $callback);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param  string  $relation
         * @param  \Closure  $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereDoesntHave($relation, $callback = null)
        {
            return self::query()->orWhereDoesntHave($relation, $callback);
        }

        /**
         * Add subselect queries to count the relations.
         *
         * @param  mixed  $relations
         * @return $this
         * @static
         */
        public static function withCount($relations)
        {
            return self::query()->withCount($relations);
        }

        /**
         * Merge the where constraints from another query to the current query.
         *
         * @param  \Illuminate\Database\Eloquent\Builder  $from
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function mergeConstraintsFrom($from)
        {
            return self::query()->mergeConstraintsFrom($from);
        }

        /**
         * Set the columns to be selected.
         *
         * @param  array|mixed  $columns
         * @return $this
         * @static
         */
        public static function select($columns = array())
        {
            return self::query()->select($columns);
        }

        /**
         * Add a new "raw" select expression to the query.
         *
         * @param  string  $expression
         * @param  array  $bindings
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function selectRaw($expression, $bindings = array())
        {
            return self::query()->selectRaw($expression, $bindings);
        }

        /**
         * Add a subselect expression to the query.
         *
         * @param  \Closure|\Illuminate\Database\Query\Builder|string  $query
         * @param  string  $as
         * @return \Illuminate\Database\Query\Builder|static
         * @throws \InvalidArgumentException
         * @static
         */
        public static function selectSub($query, $as)
        {
            return self::query()->selectSub($query, $as);
        }

        /**
         * Add a new select column to the query.
         *
         * @param  array|mixed  $column
         * @return $this
         * @static
         */
        public static function addSelect($column)
        {
            return self::query()->addSelect($column);
        }

        /**
         * Force the query to only return distinct results.
         *
         * @return $this
         * @static
         */
        public static function distinct()
        {
            return self::query()->distinct();
        }

        /**
         * Set the table which the query is targeting.
         *
         * @param  string  $table
         * @return $this
         * @static
         */
        public static function from($table)
        {
            return self::query()->from($table);
        }

        /**
         * Add a join clause to the query.
         *
         * @param  string  $table
         * @param  string  $first
         * @param  string|null  $operator
         * @param  string|null  $second
         * @param  string  $type
         * @param  bool  $where
         * @return $this
         * @static
         */
        public static function join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
        {
            return self::query()->join($table, $first, $operator, $second, $type, $where);
        }

        /**
         * Add a "join where" clause to the query.
         *
         * @param  string  $table
         * @param  string  $first
         * @param  string  $operator
         * @param  string  $second
         * @param  string  $type
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function joinWhere($table, $first, $operator, $second, $type = 'inner')
        {
            return self::query()->joinWhere($table, $first, $operator, $second, $type);
        }

        /**
         * Add a left join to the query.
         *
         * @param  string  $table
         * @param  string  $first
         * @param  string|null  $operator
         * @param  string|null  $second
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function leftJoin($table, $first, $operator = null, $second = null)
        {
            return self::query()->leftJoin($table, $first, $operator, $second);
        }

        /**
         * Add a "join where" clause to the query.
         *
         * @param  string  $table
         * @param  string  $first
         * @param  string  $operator
         * @param  string  $second
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function leftJoinWhere($table, $first, $operator, $second)
        {
            return self::query()->leftJoinWhere($table, $first, $operator, $second);
        }

        /**
         * Add a right join to the query.
         *
         * @param  string  $table
         * @param  string  $first
         * @param  string|null  $operator
         * @param  string|null  $second
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function rightJoin($table, $first, $operator = null, $second = null)
        {
            return self::query()->rightJoin($table, $first, $operator, $second);
        }

        /**
         * Add a "right join where" clause to the query.
         *
         * @param  string  $table
         * @param  string  $first
         * @param  string  $operator
         * @param  string  $second
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function rightJoinWhere($table, $first, $operator, $second)
        {
            return self::query()->rightJoinWhere($table, $first, $operator, $second);
        }

        /**
         * Add a "cross join" clause to the query.
         *
         * @param  string  $table
         * @param  string|null  $first
         * @param  string|null  $operator
         * @param  string|null  $second
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function crossJoin($table, $first = null, $operator = null, $second = null)
        {
            return self::query()->crossJoin($table, $first, $operator, $second);
        }

        /**
         * Merge an array of where clauses and bindings.
         *
         * @param  array  $wheres
         * @param  array  $bindings
         * @return void
         * @static
         */
        public static function mergeWheres($wheres, $bindings)
        {
            self::query()->mergeWheres($wheres, $bindings);
        }

        /**
         * Add a "where" clause comparing two columns to the query.
         *
         * @param  string|array  $first
         * @param  string|null  $operator
         * @param  string|null  $second
         * @param  string|null  $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and')
        {
            return self::query()->whereColumn($first, $operator, $second, $boolean);
        }

        /**
         * Add an "or where" clause comparing two columns to the query.
         *
         * @param  string|array  $first
         * @param  string|null  $operator
         * @param  string|null  $second
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereColumn($first, $operator = null, $second = null)
        {
            return self::query()->orWhereColumn($first, $operator, $second);
        }

        /**
         * Add a raw where clause to the query.
         *
         * @param  string  $sql
         * @param  mixed  $bindings
         * @param  string  $boolean
         * @return $this
         * @static
         */
        public static function whereRaw($sql, $bindings = array(), $boolean = 'and')
        {
            return self::query()->whereRaw($sql, $bindings, $boolean);
        }

        /**
         * Add a raw or where clause to the query.
         *
         * @param  string  $sql
         * @param  mixed  $bindings
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereRaw($sql, $bindings = array())
        {
            return self::query()->orWhereRaw($sql, $bindings);
        }

        /**
         * Add a "where in" clause to the query.
         *
         * @param  string  $column
         * @param  mixed  $values
         * @param  string  $boolean
         * @param  bool  $not
         * @return $this
         * @static
         */
        public static function whereIn($column, $values, $boolean = 'and', $not = false)
        {
            return self::query()->whereIn($column, $values, $boolean, $not);
        }

        /**
         * Add an "or where in" clause to the query.
         *
         * @param  string  $column
         * @param  mixed  $values
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereIn($column, $values)
        {
            return self::query()->orWhereIn($column, $values);
        }

        /**
         * Add a "where not in" clause to the query.
         *
         * @param  string  $column
         * @param  mixed  $values
         * @param  string  $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNotIn($column, $values, $boolean = 'and')
        {
            return self::query()->whereNotIn($column, $values, $boolean);
        }

        /**
         * Add an "or where not in" clause to the query.
         *
         * @param  string  $column
         * @param  mixed  $values
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNotIn($column, $values)
        {
            return self::query()->orWhereNotIn($column, $values);
        }

        /**
         * Add a "where null" clause to the query.
         *
         * @param  string  $column
         * @param  string  $boolean
         * @param  bool  $not
         * @return $this
         * @static
         */
        public static function whereNull($column, $boolean = 'and', $not = false)
        {
            return self::query()->whereNull($column, $boolean, $not);
        }

        /**
         * Add an "or where null" clause to the query.
         *
         * @param  string  $column
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNull($column)
        {
            return self::query()->orWhereNull($column);
        }

        /**
         * Add a "where not null" clause to the query.
         *
         * @param  string  $column
         * @param  string  $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNotNull($column, $boolean = 'and')
        {
            return self::query()->whereNotNull($column, $boolean);
        }

        /**
         * Add a where between statement to the query.
         *
         * @param  string  $column
         * @param  array  $values
         * @param  string  $boolean
         * @param  bool  $not
         * @return $this
         * @static
         */
        public static function whereBetween($column, $values, $boolean = 'and', $not = false)
        {
            return self::query()->whereBetween($column, $values, $boolean, $not);
        }

        /**
         * Add an or where between statement to the query.
         *
         * @param  string  $column
         * @param  array  $values
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereBetween($column, $values)
        {
            return self::query()->orWhereBetween($column, $values);
        }

        /**
         * Add a where not between statement to the query.
         *
         * @param  string  $column
         * @param  array  $values
         * @param  string  $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNotBetween($column, $values, $boolean = 'and')
        {
            return self::query()->whereNotBetween($column, $values, $boolean);
        }

        /**
         * Add an or where not between statement to the query.
         *
         * @param  string  $column
         * @param  array  $values
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNotBetween($column, $values)
        {
            return self::query()->orWhereNotBetween($column, $values);
        }

        /**
         * Add an "or where not null" clause to the query.
         *
         * @param  string  $column
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNotNull($column)
        {
            return self::query()->orWhereNotNull($column);
        }

        /**
         * Add a "where date" statement to the query.
         *
         * @param  string  $column
         * @param  string  $operator
         * @param  mixed  $value
         * @param  string  $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereDate($column, $operator, $value = null, $boolean = 'and')
        {
            return self::query()->whereDate($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where date" statement to the query.
         *
         * @param  string  $column
         * @param  string  $operator
         * @param  string  $value
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereDate($column, $operator, $value)
        {
            return self::query()->orWhereDate($column, $operator, $value);
        }

        /**
         * Add a "where time" statement to the query.
         *
         * @param  string  $column
         * @param  string  $operator
         * @param  int  $value
         * @param  string  $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereTime($column, $operator, $value, $boolean = 'and')
        {
            return self::query()->whereTime($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where time" statement to the query.
         *
         * @param  string  $column
         * @param  string  $operator
         * @param  int  $value
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereTime($column, $operator, $value)
        {
            return self::query()->orWhereTime($column, $operator, $value);
        }

        /**
         * Add a "where day" statement to the query.
         *
         * @param  string  $column
         * @param  string  $operator
         * @param  mixed  $value
         * @param  string  $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereDay($column, $operator, $value = null, $boolean = 'and')
        {
            return self::query()->whereDay($column, $operator, $value, $boolean);
        }

        /**
         * Add a "where month" statement to the query.
         *
         * @param  string  $column
         * @param  string  $operator
         * @param  mixed  $value
         * @param  string  $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereMonth($column, $operator, $value = null, $boolean = 'and')
        {
            return self::query()->whereMonth($column, $operator, $value, $boolean);
        }

        /**
         * Add a "where year" statement to the query.
         *
         * @param  string  $column
         * @param  string  $operator
         * @param  mixed  $value
         * @param  string  $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereYear($column, $operator, $value = null, $boolean = 'and')
        {
            return self::query()->whereYear($column, $operator, $value, $boolean);
        }

        /**
         * Add a nested where statement to the query.
         *
         * @param  \Closure  $callback
         * @param  string  $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNested($callback, $boolean = 'and')
        {
            return self::query()->whereNested($callback, $boolean);
        }

        /**
         * Create a new query instance for nested where condition.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function forNestedWhere()
        {
            return self::query()->forNestedWhere();
        }

        /**
         * Add another query builder as a nested where to the query builder.
         *
         * @param  \Illuminate\Database\Query\Builder|static  $query
         * @param  string  $boolean
         * @return $this
         * @static
         */
        public static function addNestedWhereQuery($query, $boolean = 'and')
        {
            return self::query()->addNestedWhereQuery($query, $boolean);
        }

        /**
         * Add an exists clause to the query.
         *
         * @param  \Closure  $callback
         * @param  string  $boolean
         * @param  bool  $not
         * @return $this
         * @static
         */
        public static function whereExists($callback, $boolean = 'and', $not = false)
        {
            return self::query()->whereExists($callback, $boolean, $not);
        }

        /**
         * Add an or exists clause to the query.
         *
         * @param  \Closure  $callback
         * @param  bool  $not
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereExists($callback, $not = false)
        {
            return self::query()->orWhereExists($callback, $not);
        }

        /**
         * Add a where not exists clause to the query.
         *
         * @param  \Closure  $callback
         * @param  string  $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNotExists($callback, $boolean = 'and')
        {
            return self::query()->whereNotExists($callback, $boolean);
        }

        /**
         * Add a where not exists clause to the query.
         *
         * @param  \Closure  $callback
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNotExists($callback)
        {
            return self::query()->orWhereNotExists($callback);
        }

        /**
         * Add an exists clause to the query.
         *
         * @param  \Illuminate\Database\Query\Builder  $query
         * @param  string  $boolean
         * @param  bool  $not
         * @return $this
         * @static
         */
        public static function addWhereExistsQuery($query, $boolean = 'and', $not = false)
        {
            return self::query()->addWhereExistsQuery($query, $boolean, $not);
        }

        /**
         * Handles dynamic "where" clauses to the query.
         *
         * @param  string  $method
         * @param  string  $parameters
         * @return $this
         * @static
         */
        public static function dynamicWhere($method, $parameters)
        {
            return self::query()->dynamicWhere($method, $parameters);
        }

        /**
         * Add a "group by" clause to the query.
         *
         * @param  array  $groups
         * @return $this
         * @static
         */
        public static function groupBy($groups = null)
        {
            return self::query()->groupBy($groups);
        }

        /**
         * Add a "having" clause to the query.
         *
         * @param  string  $column
         * @param  string|null  $operator
         * @param  string|null  $value
         * @param  string  $boolean
         * @return $this
         * @static
         */
        public static function having($column, $operator = null, $value = null, $boolean = 'and')
        {
            return self::query()->having($column, $operator, $value, $boolean);
        }

        /**
         * Add a "or having" clause to the query.
         *
         * @param  string  $column
         * @param  string|null  $operator
         * @param  string|null  $value
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orHaving($column, $operator = null, $value = null)
        {
            return self::query()->orHaving($column, $operator, $value);
        }

        /**
         * Add a raw having clause to the query.
         *
         * @param  string  $sql
         * @param  array  $bindings
         * @param  string  $boolean
         * @return $this
         * @static
         */
        public static function havingRaw($sql, $bindings = array(), $boolean = 'and')
        {
            return self::query()->havingRaw($sql, $bindings, $boolean);
        }

        /**
         * Add a raw or having clause to the query.
         *
         * @param  string  $sql
         * @param  array  $bindings
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orHavingRaw($sql, $bindings = array())
        {
            return self::query()->orHavingRaw($sql, $bindings);
        }

        /**
         * Add an "order by" clause to the query.
         *
         * @param  string  $column
         * @param  string  $direction
         * @return $this
         * @static
         */
        public static function orderBy($column, $direction = 'asc')
        {
            return self::query()->orderBy($column, $direction);
        }

        /**
         * Add a descending "order by" clause to the query.
         *
         * @param  string  $column
         * @return $this
         * @static
         */
        public static function orderByDesc($column)
        {
            return self::query()->orderByDesc($column);
        }

        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param  string  $column
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function latest($column = 'created_at')
        {
            return self::query()->latest($column);
        }

        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param  string  $column
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function oldest($column = 'created_at')
        {
            return self::query()->oldest($column);
        }

        /**
         * Put the query's results in random order.
         *
         * @param  string  $seed
         * @return $this
         * @static
         */
        public static function inRandomOrder($seed = '')
        {
            return self::query()->inRandomOrder($seed);
        }

        /**
         * Add a raw "order by" clause to the query.
         *
         * @param  string  $sql
         * @param  array  $bindings
         * @return $this
         * @static
         */
        public static function orderByRaw($sql, $bindings = array())
        {
            return self::query()->orderByRaw($sql, $bindings);
        }

        /**
         * Alias to set the "offset" value of the query.
         *
         * @param  int  $value
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function skip($value)
        {
            return self::query()->skip($value);
        }

        /**
         * Set the "offset" value of the query.
         *
         * @param  int  $value
         * @return $this
         * @static
         */
        public static function offset($value)
        {
            return self::query()->offset($value);
        }

        /**
         * Alias to set the "limit" value of the query.
         *
         * @param  int  $value
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function take($value)
        {
            return self::query()->take($value);
        }

        /**
         * Set the "limit" value of the query.
         *
         * @param  int  $value
         * @return $this
         * @static
         */
        public static function limit($value)
        {
            return self::query()->limit($value);
        }

        /**
         * Set the limit and offset for a given page.
         *
         * @param  int  $page
         * @param  int  $perPage
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function forPage($page, $perPage = 15)
        {
            return self::query()->forPage($page, $perPage);
        }

        /**
         * Constrain the query to the next "page" of results after a given ID.
         *
         * @param  int  $perPage
         * @param  int  $lastId
         * @param  string  $column
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id')
        {
            return self::query()->forPageAfterId($perPage, $lastId, $column);
        }

        /**
         * Add a union statement to the query.
         *
         * @param  \Illuminate\Database\Query\Builder|\Closure  $query
         * @param  bool  $all
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function union($query, $all = false)
        {
            return self::query()->union($query, $all);
        }

        /**
         * Add a union all statement to the query.
         *
         * @param  \Illuminate\Database\Query\Builder|\Closure  $query
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function unionAll($query)
        {
            return self::query()->unionAll($query);
        }

        /**
         * Lock the selected rows in the table.
         *
         * @param  string|bool  $value
         * @return $this
         * @static
         */
        public static function lock($value = true)
        {
            return self::query()->lock($value);
        }

        /**
         * Lock the selected rows in the table for updating.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function lockForUpdate()
        {
            return self::query()->lockForUpdate();
        }

        /**
         * Share lock the selected rows in the table.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function sharedLock()
        {
            return self::query()->sharedLock();
        }

        /**
         * Get the SQL representation of the query.
         *
         * @return string
         * @static
         */
        public static function toSql()
        {
            return self::query()->toSql();
        }

        /**
         * Get the count of the total records for the paginator.
         *
         * @param  array  $columns
         * @return int
         * @static
         */
        public static function getCountForPagination($columns = array())
        {
            return self::query()->getCountForPagination($columns);
        }

        /**
         * Concatenate values of a given column as a string.
         *
         * @param  string  $column
         * @param  string  $glue
         * @return string
         * @static
         */
        public static function implode($column, $glue = '')
        {
            return self::query()->implode($column, $glue);
        }

        /**
         * Determine if any rows exist for the current query.
         *
         * @return bool
         * @static
         */
        public static function exists()
        {
            return self::query()->exists();
        }

        /**
         * Retrieve the "count" result of the query.
         *
         * @param  string  $columns
         * @return int
         * @static
         */
        public static function count($columns = '*')
        {
            return self::query()->count($columns);
        }

        /**
         * Retrieve the minimum value of a given column.
         *
         * @param  string  $column
         * @return mixed
         * @static
         */
        public static function min($column)
        {
            return self::query()->min($column);
        }

        /**
         * Retrieve the maximum value of a given column.
         *
         * @param  string  $column
         * @return mixed
         * @static
         */
        public static function max($column)
        {
            return self::query()->max($column);
        }

        /**
         * Retrieve the sum of the values of a given column.
         *
         * @param  string  $column
         * @return mixed
         * @static
         */
        public static function sum($column)
        {
            return self::query()->sum($column);
        }

        /**
         * Retrieve the average of the values of a given column.
         *
         * @param  string  $column
         * @return mixed
         * @static
         */
        public static function avg($column)
        {
            return self::query()->avg($column);
        }

        /**
         * Alias for the "avg" method.
         *
         * @param  string  $column
         * @return mixed
         * @static
         */
        public static function average($column)
        {
            return self::query()->average($column);
        }

        /**
         * Execute an aggregate function on the database.
         *
         * @param  string  $function
         * @param  array  $columns
         * @return mixed
         * @static
         */
        public static function aggregate($function, $columns = array())
        {
            return self::query()->aggregate($function, $columns);
        }

        /**
         * Execute a numeric aggregate function on the database.
         *
         * @param  string  $function
         * @param  array  $columns
         * @return float|int
         * @static
         */
        public static function numericAggregate($function, $columns = array())
        {
            return self::query()->numericAggregate($function, $columns);
        }

        /**
         * Insert a new record into the database.
         *
         * @param  array  $values
         * @return bool
         * @static
         */
        public static function insert($values)
        {
            return self::query()->insert($values);
        }

        /**
         * Insert a new record and get the value of the primary key.
         *
         * @param  array  $values
         * @param  string|null  $sequence
         * @return int
         * @static
         */
        public static function insertGetId($values, $sequence = null)
        {
            return self::query()->insertGetId($values, $sequence);
        }

        /**
         * Insert or update a record matching the attributes, and fill it with values.
         *
         * @param  array  $attributes
         * @param  array  $values
         * @return bool
         * @static
         */
        public static function updateOrInsert($attributes, $values = array())
        {
            return self::query()->updateOrInsert($attributes, $values);
        }

        /**
         * Run a truncate statement on the table.
         *
         * @return void
         * @static
         */
        public static function truncate()
        {
            self::query()->truncate();
        }

        /**
         * Create a raw database expression.
         *
         * @param  mixed  $value
         * @return \Illuminate\Database\Query\Expression
         * @static
         */
        public static function raw($value)
        {
            return self::query()->raw($value);
        }

        /**
         * Get the current query value bindings in a flattened array.
         *
         * @return array
         * @static
         */
        public static function getBindings()
        {
            return self::query()->getBindings();
        }

        /**
         * Get the raw array of bindings.
         *
         * @return array
         * @static
         */
        public static function getRawBindings()
        {
            return self::query()->getRawBindings();
        }

        /**
         * Set the bindings on the query builder.
         *
         * @param  array  $bindings
         * @param  string  $type
         * @return $this
         * @throws \InvalidArgumentException
         * @static
         */
        public static function setBindings($bindings, $type = 'where')
        {
            return self::query()->setBindings($bindings, $type);
        }

        /**
         * Add a binding to the query.
         *
         * @param  mixed  $value
         * @param  string  $type
         * @return $this
         * @throws \InvalidArgumentException
         * @static
         */
        public static function addBinding($value, $type = 'where')
        {
            return self::query()->addBinding($value, $type);
        }

        /**
         * Merge an array of bindings into our bindings.
         *
         * @param  \Illuminate\Database\Query\Builder  $query
         * @return $this
         * @static
         */
        public static function mergeBindings($query)
        {
            return self::query()->mergeBindings($query);
        }

        /**
         * Get the database query processor instance.
         *
         * @return \Illuminate\Database\Query\Processors\Processor
         * @static
         */
        public static function getProcessor()
        {
            return self::query()->getProcessor();
        }

        /**
         * Get the query grammar instance.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar
         * @static
         */
        public static function getGrammar()
        {
            return self::query()->getGrammar();
        }

        /**
         * Use the write pdo for query.
         *
         * @return $this
         * @static
         */
        public static function useWritePdo()
        {
            return self::query()->useWritePdo();
        }

        /**
         * Clone the query without the given properties.
         *
         * @param  array  $properties
         * @return static
         * @static
         */
        public static function cloneWithout($properties)
        {
            return self::query()->cloneWithout($properties);
        }

        /**
         * Clone the query without the given bindings.
         *
         * @param  array  $except
         * @return static
         * @static
         */
        public static function cloneWithoutBindings($except)
        {
            return self::query()->cloneWithoutBindings($except);
        }

        /**
         * Register a custom macro.
         *
         * @param  string  $name
         * @param  object|callable  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            self::query()->macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param  object  $mixin
         * @return void
         * @static
         */
        public static function mixin($mixin)
        {
            self::query()->mixin($mixin);
        }

        /**
         * Checks if macro is registered.
         *
         * @param  string  $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return self::query()->hasMacro($name);
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param  string  $method
         * @param  array  $parameters
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            return self::query()->macroCall($method, $parameters);
        }
    }
}
