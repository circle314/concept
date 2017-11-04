CHANGE LOG FOR 1.1
===

### New Features

##### New Interfaces for Value

There are now several new interfaces in the Value module, and these interfaces are separated
out according to the principles of CQRS. Note that Commands are *not* being type-hinted to the
return type `void`, as that would incur a dependency on PHP from 7.0 to 7.1:

| New Interface | Notes |
|---|---|
|`ValueInterface`|Includes defaultable, gettable, and settable commands and queries|
|`ValueCommandInterface`|Includes defaultable, gettable, and settable commands|
|`ValueQueryInterface`|Includes defaultable, gettable, and settable queries|
|`Defaultable\DefaultableValueInterface`|Includes defaultable commands and queries|
|`Defaultable\DefaultableValueCommandsInterface`|Defines defaultable commands|
|`Defaultable\DefaultableValueQueryInterface`|Defines defaultable queries|
|`Gettable\GettableValueInterface`|Includes gettable commands and queries|
|`Gettable\GettableValueCommandsInterface`|Defines gettable commands|
|`Gettable\GettableValueQueryInterface`|Defines gettable queries|
|`Settable\SettableValueInterface`|Includes settable commands and queries|
|`Settable\SettableValueCommandsInterface`|Defines settable commands|
|`Settable\SettableValueQueryInterface`|Defines settable queries|


### New Functions

*None*

### Backward Incompatible Changes

*None*

### Deprecated Features

There are several deprecations, as we aim to organise the Value module into a better structure.
Note, all following interface names are located in the namespace `Circle314\Concept\Value`:

| Deprecated Interface | Intended Replacement | Migration Notes |
|---|---|---|
|`ValueHandlerInterface`|`ValueInterface`|Interface methods now have strict return types|
|`ValueDefaultableInterface`|`Defaultable\DefaultableValueInterface`|Interface methods now have strict return types|
|`ValueGettableInterface`|`Gettable\GettableValueInterface`|Interface methods now have strict return types|
|`ValueSettableInterface`|`Settable\SettableValueInterface`|Interface methods now have strict return types|
|`ValueSettableFromArrayInterface`|*none*|This interface is being removed in v1.2|


### Changed Functions

*None*

### Other Changes

*None*