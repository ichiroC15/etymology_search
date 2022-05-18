@startuml
left to right direction

rectangle "英単語検索システム" as EnglishWordSearch {
    package "英単語語源検索" as EtymologySearch{
        usecase "単語の語源を検索" as SearchForEtymology
        usecase "同じ語源を持つ単語を検索" as SearchForWordsByCommonEtymology
    }
}

actor user as "ユーザー"
user ---> SearchForEtymology
user ---> SearchForWordByCommonEtymology

@enduml