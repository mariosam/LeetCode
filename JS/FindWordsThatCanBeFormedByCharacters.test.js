/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countCharacters } from './FindWordsThatCanBeFormedByCharacters.js'

TEST('Starting FindWordsThatCanBeFormedByCharacters test...', (t) => {
    //Test 1
    let want = 6
    let got = countCharacters( ["cat","bt","hat","tree"], "atach" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 10
    got = countCharacters( ["hello","world","leetcode"], "welldonehoneyr" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
