/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumDeletions } from './MinimumDeletionsToMakeStringBalanced.js'

TEST('Starting MinimumDeletionsToMakeStringBalanced test...', (t) => {
    //Test 1
    let want = 2
    let got = minimumDeletions( "aababbab" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = minimumDeletions( "bbaaaaabb" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
