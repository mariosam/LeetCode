/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxFreqSum } from './FindMostFrequentVowelAndConsonant.js'

TEST('Starting FindMostFrequentVowelAndConsonant test...', (t) => {
    //Test 1
    let want = 6
    let got = maxFreqSum( "successes" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = maxFreqSum( "aeiaeia" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
