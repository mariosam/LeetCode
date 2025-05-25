/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findWordsContaining } from './FindWordsContainingCharacter.js'

TEST('Starting FindWordsContainingCharacter test...', (t) => {
    //Test 1
    let want = [0,1]
    let got = findWordsContaining( ["leet","code"], "e" )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [0,2]
    got = findWordsContaining( ["abc","bcd","aaaa","cbc"], "a" )
    t.assert( want.toString == got.toString, "Expect: "+want)
    //Test 3
    want = []
    got = findWordsContaining( ["abc","bcd","aaaa","cbc"], "z" )
    t.assert( want.toString == got.toString, "Expect: "+want)

    t.end()
})
