@startuml
left to right direction

rectangle "英単語検索システム" as EnglishWordSearch {
    package "英単語語源検索" as EtimologySearch{
        usecase "単語の語源を検索" as SearchByEnglishWord
        usecase "同じ語源を持つ単語を検索" as SearchByCommonEtymology
    }
}

actor user as "ユーザー"
user ---> SearchByEnglishWord
user ---> SearchByCommonEtymology

@enduml