/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { groupAnagrams } from './GroupAnagrams.js'

TEST('Starting GroupAnagrams test...', (t) => {
    //Test 1
    let want = [["bat"],["nat","tan"],["ate","eat","tea"]]
    let got = groupAnagrams( ["eat","tea","tan","ate","nat","bat"] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [[""]]
    got = groupAnagrams( [""] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = [["a"]]
    got = groupAnagrams( ["a"] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
