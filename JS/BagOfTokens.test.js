/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { bagOfTokensScore } from './BagOfTokens.js'

TEST('Starting BagOfTokens test...', (t) => {
    //Test 1
    let want = 0
    let got = bagOfTokensScore( [100], 50 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = bagOfTokensScore( [200,100], 150 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 2
    got = bagOfTokensScore( [100,200,300,400], 200 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
