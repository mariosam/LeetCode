/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countPrefixSuffixPairs } from './CountPrefixAndSuffixPairsI.js'

TEST('Starting CountPrefixAndSuffixPairsI test...', (t) => {
    //Test 1
    let want = 4
    let got = countPrefixSuffixPairs( ["a","aba","ababa","aa"] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = countPrefixSuffixPairs( ["pa","papa","ma","mama"] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = countPrefixSuffixPairs( ["abab","ab"] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
