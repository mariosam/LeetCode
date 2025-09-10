/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { peopleAwareOfSecret } from './NumberOfPeopleAwareOfSecret.js'

TEST('Starting NumberOfPeopleAwareOfSecret test...', (t) => {
    //Test 1
    let want = 5
    let got = peopleAwareOfSecret( 6, 2, 4 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 6
    got = peopleAwareOfSecret( 4, 1, 3 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
