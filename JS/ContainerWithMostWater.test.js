/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxArea } from './ContainerWithMostWater.js'

TEST('Starting ContainerWithMostWater test...', (t) => {
    //Test 1
    let want = 49
    let got = maxArea( [1,8,6,2,5,4,8,3,7] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = maxArea( [1,1] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
