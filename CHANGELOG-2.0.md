CHANGE LOG FOR 2.0
===

### New Features

We have restructured the interfaces to incorporate to the new Circle314 CQS component, which allows
separation of Commands and Queries at a class level. The following interfaces are now segregated in
this way:

 * Identification\IdentifierInterface
 * Value\ValueDefaultableInterface
 * Value\ValueGettableInterface
 * Value\ValueSettableInterface
 * Value\ValueInterface


### New Functions

*None*

### Backward Incompatible Changes

PHP Version requirement is being changed from 7.0 to 7.1, in order to accommodate `void` return types on Commands.

Various interfaces have been completely removed from the Identification module as individual interfaces. For these,
you should use the `IdentifierInterface` instead:

| Removed Interface |
|---|
|`DeleteIdentifierInterface`|
|`GetIdentifierInterface`|
|`HasIdentifierInterface`|
|`SaveIdentifierInterface`|

Various interfaces have been completely removed from the Value module:

| Removed Interface | Replacement Interface | Migration Notes |
|---|---|---|
|`ValueHandlerInterface`|`ValueInterface`|Interface methods now have strict return types|
|`ValueDefaultableInterface`|`Defaultable\DefaultableValueInterface`|Interface methods now have strict return types|
|`ValueGettableInterface`|`Gettable\GettableValueInterface`|Interface methods now have strict return types|
|`ValueSettableInterface`|`Settable\SettableValueInterface`|Interface methods now have strict return types|
|`ValueSettableFromArrayInterface`|*none*|This interface is being removed in v1.2|

### Deprecated Features

*None*

### Changed Functions

*None*

### Other Changes

*None*