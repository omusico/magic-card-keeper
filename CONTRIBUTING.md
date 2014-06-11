Code Style Guide
----------------

1. Follow PSR 0, 1, 2
1. For gateways, use fetch, fetchBy, save, attach, detach and delete ex: fetchByEmail, saveCard, deleteSet, attachCard
    1. Fetch MUST include the noun on singular and All with fetching multiple ex: fetchCard, fetchAllCards, fetchAllCardsForSet
    1. FetchBy MUST include the noun ex: fetchByEmail, fetchByName
    1. Save, delete, attach and detach MUST include the noun ex: attachUser, saveJob, detachCard
    1. If you need to update part of an document, use the term update and the singular noun
      Good: updateUserPassword, updateCardSet
      Bad: updateUsersPassword, saveNewCardToSet
1. When Talking with 3rd party services, follow the rules for gateways however
    1. use import instead of fetch
    1. use send instead of save
    1. use remove instead of delete
1. Abstract classes MUST HAVE the first word be "Abstract" ex: AbstractFooClass
1. Interfaces MUST HAVE the last word be "Interface" ex: FooBarInterface
1. Traits MUST HAVE the last word be "Trait" ex: FooBarTrait
1. Events on object that will be series MUST be in the follow order: event.pre, event, event.post
    ex: saveUser.pre, saveUser, saveUser.post
